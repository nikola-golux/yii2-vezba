<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Korisnici;

class KorisniciController extends Controller{
    
    public function actionIndex(){
        $korisnici = Korisnici::find()->all();
        
        return $this->render('index', ['korisnici'=>$korisnici]);
    }
}