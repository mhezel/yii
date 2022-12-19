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
            if($model->save(false)){
                return $this->redirect(['view','id'=>$id]);
            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
    public function actionView($id)
    {
        $model = Projects::findOne(['id'=>$id]);
        return $this->render('view', [
            'model' => $model
        ]);
    }
    public function actionUpdate($id)
    {
        $model = Projects::findOne(['id'=>$id]);
        if($model->load(Yii::$app->request->post())){
            $model->posted_by = Yii::$app->user->identity->getId();
            if($model->save(false)){
                return $this->redirect(['view','id'=>$id]);
            }
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }
    public function actionDelete($id)
    {
        if (Projects::find()->where(['id'=>$id])->exists()){
           $model = Projects::find()->where(['id'=>$id])->one();
           if($model->delete()){
               return $this->redirect(['index']);
           }
        }
    }
}
?>