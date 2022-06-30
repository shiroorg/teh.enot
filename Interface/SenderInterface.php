<?php

namespace EnotNotifer\Interface;

/**
 * Указываем интерфейс который будет использоваться для всех будущих Декораторов
 * Interface SenderInterface
 * @package EnotNotifer\Interface
 */
interface SenderInterface {

    /**
     * Указываем обязательный метод для отправки в рамках одного декаратора
     * @param $message
     * @return mixed
     */
    public function send($message);

}