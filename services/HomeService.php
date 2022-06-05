<?php

namespace app\services;

use app\repository\CollectionRepository;
use app\repository\ProductRepository;

class HomeService
{
    public function arrayProduct()
    {

        $collections = (new CollectionRepository())->getAllObject();
        $collectionArray = [];

        foreach ($collections as $collection) {
            $productsArray = (new ProductRepository)->getWhereAllObject('collection_id', $collection->id);

            $collectionArray[] = $collection->name;
            foreach ($productsArray as $product) {
                $productItem = [];
                $productItem['id'] = $product->id;
                $productItem['name'] = $product->name;
                $productItem['price'] = $product->price;
                $collectionArray[] = $productItem;
            }

            if (count($collectionArray) % 3 === 2) {
                $collectionArray[] = '';
            }
        };

        return $collectionArray;
    }
}