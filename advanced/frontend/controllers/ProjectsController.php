<?php
namespace frontend\controllers;
use app\models\Projects;
use Faker\Factory;
use yii\helpers\Url;
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
        $user_id = Yii::$app->user->identity->getId();
        $model = Projects::find()->where(['posted_by'=>$user_id])->all();
        return $this->render('index',['model'=>$model]);
    }
    public function actionCreate()
    {
        $model = new Projects();
        if($model->load(Yii::$app->request->post())){
            $model->posted_by = Yii::$app->user->identity->getId();
            if($model->save(false)){
                return $this->redirect(['view','id'=>$model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
    public function actionView($id)
    {
        $user_id = Yii::$app->user->identity->getId();
        $model = Projects::findOne(['id'=>$id,'posted_by'=>$user_id]);
        return $this->render('view', [
            'model' => $model
        ]);
    }
    public function actionUpdate($id)
    {
        $user_id = Yii::$app->user->identity->getId();
        $model = Projects::findOne(['id'=>$id,'posted_by'=>$user_id]);
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
        $user_id = Yii::$app->user->identity->getId();
        if (Projects::find()->where(['id'=>$id,'posted_by'=>$user_id])->exists()){
           $model = Projects::find()->where(['id'=>$id])->one();
           if($model->delete()){
               return $this->redirect(['index']);
           }
        }
    }
    public function actionFake(){
        $faker = \Faker\Factory::create();
        $projects = new Projects();
        for ($i = 1; $i <= 100; $i++){
            $projects->setIsNewRecord(true);
            $projects->id = null;
            $projects->posted_by = rand(5,8);
            $projects->title = $faker->words(random_int(1,3),true);
            $projects->body = $faker->paragraph(random_int(1,4));
            $projects->save(false);
        }
    }
}
?>