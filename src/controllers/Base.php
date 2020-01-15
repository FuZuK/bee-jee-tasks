<?php
namespace Controllers;

class Base
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    protected function view($key, $data = []) {
        return \View::render($key, $data);
    }

    protected function redirect($url) {
        error_log('Redirect to ' . $url);
        header('Location: ' . $url);

        return '';
    }

    protected function redirectWithErrors($uri, $errors) {
        $_SESSION['errors'] = $errors;
        return $this->redirect($uri);
    }

    protected function redirectWithError($uri, $error) {
        $_SESSION['errors'][] = $error;
        return $this->redirect($uri);
    }

    protected function redirectWithMessage($uri, $message) {
        $_SESSION['messages'][] = $message;
        return $this->redirect($uri);
    }

    protected function getPagingParams($arguments, $possibleOrders, $possibleDirections)
    {
        $paging = [
            'per_page' => $this->config['per_page'],
            'page' => array_key_exists('page', $arguments) ? intval($arguments['page']) : 1,
            'order' => array_key_exists('order', $arguments)
            && in_array($arguments['order'], $possibleOrders)
                ? $arguments['order']
                : $possibleOrders[0],
            'direction' => array_key_exists('direction', $arguments)
            && in_array($arguments['direction'], $possibleDirections)
                ? $arguments['direction']
                : $possibleDirections[0]
        ];
        $paging['offset'] = ($paging['page'] - 1) * $this->config['per_page'];

        return $paging;
    }
}
