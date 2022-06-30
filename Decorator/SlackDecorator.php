<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\SenderInterface;

class SlackDecorator implements SenderInterface {

    const SEND_TYPE = 'slack';

    public function send($message)
    {
        // TODO: Implement send() method.
    }

}