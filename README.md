# teh.enot
Тестовое задание на разработку
```
Реализовать систему подтверждения смены конкретной настройки пользователя
по коду из смс / email / telegram с возможностью выбора пользователем другого метода

Реализуйте данную схему без интеграции конкретных сервисов / ORM / прочее на уровне интерфейсов / контроллеров
```

### Решение

Для решение задачи, предпологается что в системе будет таблица которая хранит в себе данные
```bash
Это пример таблицы (структра и данные могут быть иными)

| ID  | UserID | Method |     Value      | Hash                             | Code | Tifetime   |
+-----+--------+--------+----------------+----------------------------------+------+------------+
| 123 | 225541 | Email  | NewEmail@bk.su | 6a204bd89f3c8348afd5c77c717a097a | 2525 | 30.06.2022 |
| 123 | 12367  | SMS    | +73421114534   | 6168f305888c3d795e67c6de17bf8a21 | 5522 | 01.07.2022 |
-------------------------------------------------------------------------------------------------
```
Пример отправки сообщения пользователю через выбраные каналы
```php
use EnotNotifer\Provider\Notifer;

$message = array(
    'email'     => 'example@mail.com',
    /* Данные которые нужны для формирования и отравки сообщения */
    'message'   => 'example@mail.com',
);

$newNotifer = new Notifer();
$newNotifer->setProvider(
    \EnotNotifer\Decorator\EmailDecorator::SEND_TYPE,
    \EnotNotifer\Decorator\SlackDecorator::SEND_TYPE,
);
$newNotifer->send($message);
```
Пример проверки подтверждения сообщения (пример реализации контролера в `Example`)
```php
 public function confirmNotify(Request $request) {

        $requestConfirm = new Confirm();

        if($requestConfirm->validation($request)) {
            $requestConfirm->save($request);
        } else {
            // TODO: Implement fail confirm;
        }

    }

```