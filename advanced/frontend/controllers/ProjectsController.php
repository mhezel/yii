<?php
namespace frontend\controllers;
use app\models\Projects;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;

class ProjectsController extends Controller{
    public function behaviors() //providing access control to the view from the controller -> behavior authentication
    {
        return[
            'access'=>[
                'class'=>AccessControl::className(),
                'rules'=>[
                    [
                        'allow'=>true,
                        'roles'=>['@']
                    ]
                ]
            ]
        ];
    }
    public function actionIndex()
    {
        $model = Projects::find()->all();
        return $this->render('index',['model'=>$model]);
    }
    public function actionCreate()
    {
        $model = new Projects();
        if($model->load(Yii::$app->request->post())){
            $model->posted_by = Yii::$app->user->identity->getId();
            $model->save(false);
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
}

?>