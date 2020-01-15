<?php

return [
    'GET /login' => 'Login.show',
    'POST /session' => 'Session.create',
    'POST /logout' => 'Session.destroy',
    'GET /' => 'Tasks.list',
    'GET /tasks/:page/:order/:direction' => 'Tasks.list',
    'GET /tasks/create' => 'Tasks.create',
    'POST /tasks/create' => 'Tasks.insert',
    'GET /tasks/edit/:id' => 'Tasks.edit',
    'POST /tasks/edit/:id' => 'Tasks.update'
];
