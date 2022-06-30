<?php

use EnotNotifer\Provider\Model;
use EnotNotifer\Provider\Notifer;
use EnotNotifer\Provider\Confirm;

class ControllerConfirm
{

    /* Пример контролера который отправляет сообщение */
    public function sendNotify()
    {

        /* ... */

        $message = array(
            'email' => 'example@mail.com',
            'phone' => '+79994442211',
            'tag' => 'sherlock77',
            'url' => 'http://slack.com/reciver',
            'message' => 'example@mail.com',
        );

        $newNotifer = new Notifer();
        $newNotifer->setProvider(
            \EnotNotifer\Decorator\EmailDecorator::SEND_TYPE,
            \EnotNotifer\Decorator\SlackDecorator::SEND_TYPE,
        );

        $newNotifer->send($message);

        /* ... */
    }

    /* Пример контролера которые проверяет подтверждение действия */
    public function confirmNotify(Request $request)
    {

        /* ... */

        $requestConfirm = new Confirm();

        // Проверяем что данные валидные
        if ($requestConfirm->validation($request)) {

            // Подтверждаем что проверка прошла
            $requestConfirm->confirm($request);

            // Обновляем данные пользователя
            $targetModel = new Model('User');
            $targetModel->update($requestConfirm, $request->data);

        } else {
            // TODO: Implement fail confirm;
        }

        /* ... */
    }

}