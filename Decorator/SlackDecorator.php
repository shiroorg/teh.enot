<?php

namespace EnotNotifer\Decorator;

use EnotNotifer\Interface\ConfirmInterface;
use EnotNotifer\Provider\BaseDecorator;

class SlackDecorator extends BaseDecorator implements ConfirmInterface {

    const SEND_TYPE = 'slack';

    public static function send($message)
    {
        // TODO: Implement send() method.

        parent::save($message);
    }

}