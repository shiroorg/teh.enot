<?php

namespace EnotNotifer\Interface;

use EnotNotifer\Provider\Confirm;

/**
 * Interface ModelInterface
 * @package EnotNotifer\Interface
 */
interface ModelInterface
{
    /**
     * Метод будет записывать данные в базу
     * @param $data
     * @return mixed
     */
    public function save($data);

    /**
     * Метод будет обновлять данные в базе
     * @param $where
     * @param $data
     * @return mixed
     */
    public function update(Confirm $confirmModel, $data);
}