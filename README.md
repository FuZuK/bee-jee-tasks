## Bee-Jee Tasks (тестовое)

### Настройка & инициализация

* Создаем конфиг из примера

```bash
cp etc/config.php.sample etc/config.php
```

* При необходимости редактируем корнфиг.
* Создаем базу данных и заливаем в нее `dump.sql`

```bash
mysql -u root -p <имя базы> < dump.sql
```

* Обновляем загрузчик классов

```bash
composer dump-autoload
```

### Запуск

```bash
php -S 127.0.0.1:9000 -t ./public
```
