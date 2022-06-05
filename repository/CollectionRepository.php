<?php

namespace app\repository;


use app\entity\Collection;


class CollectionRepository extends Repository
{

    protected function getTableName()
    {
        return 'collections';
    }

    protected function getEntityClass()
    {
        return Collection::class;
    }
}