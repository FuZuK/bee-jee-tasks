<?php $title = 'Авторизация' ?>
<?php include __DIR__ . '/../header.php'; ?>
<form action="/session" method="POST">
    <div class="form-group">
        <label for="login">Логин</label>
        <input type="text" class="form-control" name="login" id="login">
    </div>
    <div class="form-group">
        <label for="password">Пароль</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Продолжить</button>
</form>
<?php include __DIR__ . '/../footer.php'; ?>
