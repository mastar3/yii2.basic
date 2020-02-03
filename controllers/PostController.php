<?php

namespace app\controllers;
use app\controllers\AppController;

class PostController extends AppController {

    public function actionIndex() {
        
        $test = 'test';
        return $this->render('index', ['var' => $test]);
    }    

}
