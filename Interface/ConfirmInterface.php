<?php

namespace EnotNotifer\Interface;

/**
 * Указываем интерфейс который будет использоваться подтверждения
 * Interface SenderInterface
 * @package EnotNotifer\Interface
 */
interface ConfirmInterface {

    /**
     * Метод будет проверять что данные пришли валидные
     * @param $request
     * @return mixed
     */
    public function validation($request);

    /**
     * Метод будет подтверждать что пользователь прошел проверку
     * @param $request
     * @return mixed
     */
    public function confirm($request);
}