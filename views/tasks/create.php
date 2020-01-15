<?php $title = 'Добавление задачи' ?>
<?php include __DIR__ . '/../header.php'; ?>
<form action="/tasks/create" method="POST">
    <div class="form-group">
        <label for="user">Ваше имя</label>
        <input type="text" class="form-control" name="user" id="user">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
        <label for="description">Описание задачи</label>
        <textarea class="form-control" name="description" id="description" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
<?php include __DIR__ . '/../footer.php'; ?>
