<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\ConfirmInterface;
use EnotNotifer\Provider\BaseDecorator;

class TelegramDecorator extends BaseDecorator implements ConfirmInterface {

    const SEND_TYPE = 'telegram';

    public static function send($message)
    {
        // TODO: Implement send() method.

        parent::save($message);
    }

}