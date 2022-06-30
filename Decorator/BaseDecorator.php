<?php

namespace EnotNotifer\Provider;

use EnotNotifer\Interface\ConfirmInterface;

class BaseDecorator implements ConfirmInterface
{

    public static function save($message)
    {
        // TODO: Implement save data in DB method.
    }

    public static function send($message)
    {
        // TODO: Implement send() method.
    }

}