<?php
namespace Controllers;

class Session extends Base
{
    public function create($arguments, $data) {
        $validationErrors = [];
        $adminCredentials = $this->config['admin-panel'];

        if ($data['login'] !== $adminCredentials['login'] || $data['password'] !== $adminCredentials['password']) {
            $validationErrors[] = 'Неверные ученые данные';
        }

        if (count($validationErrors)) {
            return $this->redirectWithErrors('/login', $validationErrors);
        }

        \Session::authorize();

        return $this->redirectWithMessage('/', 'Вы успешно авторизировались');
    }

    public function destroy() {
        \Session::destroy();

        return $this->redirect('/');
    }
}
