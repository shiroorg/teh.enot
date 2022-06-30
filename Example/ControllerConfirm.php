<?php

use EnotNotifer\Provider\Notifer;
use EnotNotifer\Provider\Confirm;

class ControllerConfirm {

    public function sendNotify() {

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

    }

    public function confirmNotify(Request $request) {

        $requestConfirm = new Confirm();

        if($requestConfirm->validation($request)) {
            $requestConfirm->save($request);
        } else {
            // TODO: Implement fail confirm;
        }

    }

}