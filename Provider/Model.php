<?php

namespace EnotNotifer\Provider;

use EnotNotifer\Interface\ModelInterface;

/**
 * Класс для отправки сообщений и конфигурации
 * Class Model
 * @package EnotNotifer\Provider
 */
class Model implements ModelInterface
{

    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    public function save($data)
    {
        // TODO: Implement save() method.
    }

    public function update(Confirm $confirmModel, $data)
    {
        // TODO: Implement update() method.
    }

}