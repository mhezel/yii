<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use yii\helpers\ArrayHelper;

class ArrayHelperController extends Controller
{

    public function actionIndex()
    {

        /*$array =
            [
                  'one' => ['one1','one2','one3'],
                  'two'=> ['one1','one2','one3'],
                  'three',
                  'four',
                  'five'=> ['one5','one5','one5']
            ];
        //$array2 = ['one1','one2','one3'];

        //$data = ArrayHelper::getValue($array,'five');
        //echo json_encode($data);
        //echo json_encode($array2);
        //$data2 = ArrayHelper::getValue($array2,2);
       //echo json_encode($data2);


       #array validation

        if($data = ArrayHelper::keyExists('two', $array)){

                echo "key exists";
        }else{
                echo "key does not exist. . .";
        }*/
        $array2 = [
            ['id' => 1, 'name' => 'john', 'phone' => 123456],
            ['id' => 2, 'name' => 'mhez', 'phone' => 675984],
            ['id' => 3, 'name' => 'rex', 'phone' => 123465],
            ['id' => 3, 'name' => 'cold', 'phone' => 1221]
        ];
        //$data = ArrayHelper::index($array2,'id');
        //$data = ArrayHelper::getColumn($array2,'name');
        //$data = ArrayHelper::map($array2,'id','name');
        //$data = ArrayHelper::multisort($array2, 'id', SORT_DESC);
        //$data = ArrayHelper::multisort($array2, ['name','id'], SORT_DESC);
        //echo json_encode($array2);

        if (ArrayHelper::isIn('mhez', $array2)) {
            echo "value exists";
        } else {
            echo "value does not exist. . .";
        }
    }
}