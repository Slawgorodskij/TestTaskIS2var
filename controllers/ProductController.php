<?php

namespace app\controllers;

use app\engine\App;

class ProductController extends Controller
{
    public function actionCard()
    {
        $id = App::call()->request->getParams()['id'];
        $product = App::call()->productRepository->getOneObject($id);
        $collection = App::call()->collectionRepository->getWhereOneObject('id', $product->collection_id);

        echo $this->render('product', [
            'product' => $product,
            'collection' => $collection,
        ]);
    }

}