<?php include __DIR__ . '/../header.php'; ?>
<?php
$sorts = [
    'user' => 'Имя пользователя',
    'email' => 'E-mail',
    'completed' => 'Статус'
];
include __DIR__ . '/../sort.php';
?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
    <?php foreach ($tasks as $task): ?>
        <div class="col mb-4">
            <div class="card h-100 w-100" style="width: 18rem;">
                <div class="card-body">
                    <p class="card-text"><?php echo htmlspecialchars($task['description']) ?></p>
                    <p class="card-text"><small class="text-muted">Добавил(а) <b><?php echo htmlspecialchars($task['user']) ?></b> (<?php echo htmlspecialchars($task['email']) ?>)</small></p>
                    <?php if ($task['updated']): ?>
                        <p class="card-text"><small class="text-muted"><i>Отредактировано администратором</i></small></p>
                    <?php endif ?>
                    <p class="card-text"><small class="text-muted"><?php echo $task['completed'] ? 'Завершена' : 'Не завершена' ?></small></p>
                    <?php if (\Session::isAuth()): ?>
                        <a href="/tasks/edit/<?php echo $task['id'] ?>" class="btn btn-primary">Редактировать</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <?php if (!count($tasks)): ?>
    <div class="pl-3">Список задач пуст</div>
    <?php endif ?>
</div>
<?php include __DIR__ . '/../pagination.php'; ?>
<?php include __DIR__ . '/../footer.php'; ?>
