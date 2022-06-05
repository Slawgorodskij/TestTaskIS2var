<?php

namespace app\interfaces;

interface IRepository
{
    public function getOneObject($id);

    public function getWhereOneObject($name, $value);

    public function getAllObject();

    public function getWhereAllObject($name, $value);

}

