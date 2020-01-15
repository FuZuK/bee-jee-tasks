<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=isset($title) ? $title : 'Bee-Jee Tasks'?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Bee-Jee Tasks</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/tasks/create">Добавить задачу</a>
                </li>
                <?php if (!\Session::isAuth()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Авторизироваться</a>
                </li>
                <?php endif ?>
                <?php if (\Session::isAuth()): ?>
                <li class="nav-item">
                    <span style="display: none">
                        <form action="/logout" method="post" id="logout"></form>
                    </span>
                    <a class="nav-link" href="#" onclick="document.getElementById('logout').submit()">Выход</a>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
    <div class="container" style="padding-top: 20px">
        <?php include_once __DIR__ . '/errors.php' ?>
        <?php include_once __DIR__ . '/messages.php' ?>
