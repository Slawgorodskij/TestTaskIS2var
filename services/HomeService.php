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
            $products = [];
            foreach ($productsArray as $product) {
                $productItem['id'] = $product->id;
                $productItem['name'] = $product->name;
                $productItem['price'] = $product->price;
                $products[] = $productItem;
            }

            $collectionItem['name'] = $collection->name;
            $collectionItem['products'] = $products;

            $collectionArray[] = $collectionItem;
        };

        return $collectionArray;
    }
}