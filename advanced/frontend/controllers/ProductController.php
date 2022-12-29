<?php
namespace frontend\controllers;
use app\models\Projects;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

class ProductController extends Controller{

   public function behaviors() //providing access control to the view from the controller -> behavior authentication
   {
        return[
            'access'=>[
                'class'=>AccessControl::classname(),
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
        //$productview = 'category';
        //return $this->render('index',['productview'=>$productview]);
        $user_id = Yii::$app->user->identity->getId();
        $username = User::findOne(['id'=>$user_id])->username;
        $model = new ActiveDataProvider([
                'query'=>Projects::find()->where(['posted_by'=>$user_id]),
                'pagination'=>[
                    'pageSize'=>20
                ]
        ]);
        return $this->render('index',[
            'model'=>$model,
            'username'=>$username
            ]);
    }
    public function actionDetail($id,$name){
        return $this->render('detail',['id'=>$id,'name'=>$name]);
    }

}