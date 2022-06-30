<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\ConfirmInterface;
use EnotNotifer\Provider\BaseDecorator;

class SmsDecorator extends BaseDecorator implements ConfirmInterface {

    const SEND_TYPE = 'sms';

    public static function send($message)
    {
        // TODO: Implement send() method.

        parent::save($message);
    }

}