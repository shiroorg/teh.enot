<?php

namespace EnotNotifer\Provider;

use EnotNotifer\Decorator\EmailDecorator;
use EnotNotifer\Decorator\SlackDecorator;
use EnotNotifer\Decorator\SmsDecorator;
use EnotNotifer\Decorator\TelegramDecorator;

/**
 * Класс для отправки сообщений и конфигурации
 * Class Notifer
 * @package EnotNotifer\Provider
 */
class Notifer {

    /**
     * Список методов, которым нужно отправить сообщение
     * @var array
     */
    protected $provider = array();

    /**
     * @param $provider
     */
    public function setProvider(...$provider) {
        $this->provider = $provider;
    }

    /**
     * Отправка сообщений заданым способом
     * @param $message
     */
    public function send($message)
    {
        foreach ($this->provider as $provider) {

            switch ($provider) {
                case EmailDecorator::SEND_TYPE:
                    EmailDecorator::send($message);
                    break;
                    /* ... */
                case SlackDecorator::SEND_TYPE:
                    SlackDecorator::send($message);
                    break;
            }

        }
    }

}