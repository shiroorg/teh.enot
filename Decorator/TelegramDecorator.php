<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\SenderInterface;

class TelegramDecorator implements SenderInterface {

    const SEND_TYPE = 'telegram';

    public function send($message)
    {
        // TODO: Implement send() method.
    }

}