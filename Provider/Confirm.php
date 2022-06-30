<?php

namespace EnotNotifer\Provider;

use EnotNotifer\Decorator\EmailDecorator;
use EnotNotifer\Decorator\SlackDecorator;
use EnotNotifer\Decorator\SmsDecorator;
use EnotNotifer\Decorator\TelegramDecorator;
use EnotNotifer\Interface\ConfirmInterface;

/**
 * Класс для отправки сообщений и конфигурации
 * Class Notifer
 * @package EnotNotifer\Provider
 */
class Confirm implements ConfirmInterface
{

    public function validation($request)
    {
        // TODO: Implement validation() method.
    }

    public function confirm($request)
    {
        // TODO: Implement confirm() method.
    }

}