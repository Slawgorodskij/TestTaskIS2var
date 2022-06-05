<?php

namespace app\repository;

use app\entity\Product;

class ProductRepository extends Repository
{
    protected function getTableName()
    {
        return 'products';
    }


    protected function getEntityClass()
    {
        return Product::class;
    }
}