<?php

namespace app\repository;

use app\engine\App;
use app\engine\DB;
use app\interfaces\IRepository;

abstract class Repository implements IRepository
{
    abstract protected function getTableName();
    abstract protected function getEntityClass();


    public function getOneObject($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";

        return App::call()->db->queryOneObject($sql, ['id' => $id], $this->getEntityClass());
    }

    public function getWhereOneObject($name, $value)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE $name = :value";

        return App::call()->db->queryOneObject($sql, ['value' => $value], $this->getEntityClass());
    }

    public function getAllObject()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";

        return App::call()->db->queryAllObject($sql, $this->getEntityClass());
    }

    public function getWhereAllObject($name, $value)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE $name = :value";

        return App::call()->db->queryAllObject($sql, $this->getEntityClass(), ['value' => $value]);
    }
}