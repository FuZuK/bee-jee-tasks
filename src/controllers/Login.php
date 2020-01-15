<?php
namespace Controllers;

class Login extends Base
{
    public function show() {
        return $this->view('login/show');
    }
}
