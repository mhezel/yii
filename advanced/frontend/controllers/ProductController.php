<?php
namespace frontend\controllers;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

class ProductController extends Controller{

   public function behaviors() //providing access control to the view from the controller -> behavior authentication
   {
        return[
            'access'=>[
                'class'=>AccessControl::classname(),
                //'only'=>['detail'],
                'except'=>['index'],
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ]
                ]
            ]
        ];
    }
    public function actionIndex(){
        $productview = 'category';
        return $this->render('index',['productview'=>$productview]);
    }

    public function actionDetail($id,$name){
        return $this->render('detail',['id'=>$id,'name'=>$name]);
    }

}