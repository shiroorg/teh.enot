<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\SenderInterface;

class EmailDecorator implements SenderInterface {

    const SEND_TYPE = 'email';

    public function send($message)
    {
        // TODO: Implement send() method.
    }

}