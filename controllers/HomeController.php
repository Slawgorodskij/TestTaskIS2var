<?php

namespace app\controllers;

use app\engine\App;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $collections = App::call()->homeService->arrayProduct();

        echo $this->render('home', [
            'collections' => $collections,
        ]);
    }

}