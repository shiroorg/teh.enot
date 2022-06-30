<?php

namespace EnotNotifer\Interface;

/**
 * Interface NotiferInterface
 * @package EnotNotifer\Interface
 */
interface NotiferInterface
{
    /**
     * Метод будет указывать как нужно обработать сообщение
     * @param mixed ...$provider
     * @return mixed
     */
    public function setProvider(...$provider);

    /**
     * Метод будет иницировать отправку сообщений
     * @param $message
     * @return mixed
     */
    public function send($message);
}