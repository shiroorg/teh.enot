<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\ConfirmInterface;
use EnotNotifer\Provider\BaseDecorator;

class EmailDecorator extends BaseDecorator implements ConfirmInterface
{

    const SEND_TYPE = 'email';

    public static function send($message): void
    {
        // TODO: Implement send() method.

        parent::save($message);
    }

}