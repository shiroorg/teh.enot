<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\SenderInterface;

class SmsDecorator implements SenderInterface {

    const SEND_TYPE = 'sms';

    public function send($message)
    {
        // TODO: Implement send() method.
    }

}