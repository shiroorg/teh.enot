<?php

use EnotNotifer\Provider\Notifer;

$message = array(
    'email'     => 'example@mail.com',
    'phone'     => '+79994442211',
    'tag'       => 'sherlock77',
    'url'       => 'http://slack.com/reciver',
    'message'   => 'example@mail.com',
);

$newNotifer = new Notifer();
$newNotifer->setProvider(
    \EnotNotifer\Decorator\EmailDecorator::SEND_TYPE,
    \EnotNotifer\Decorator\SlackDecorator::SEND_TYPE,
);
$newNotifer->send($message);
