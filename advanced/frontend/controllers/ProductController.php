<?php
namespace frontend\controllers;
use app\models\Projects;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

class ProductController extends Controller
{
    public function behaviors() //providing access control to the view from the controller -> behavior authentication
    {
        return [
            'access' => [
                'class' => AccessControl::classname(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }
    public function actionIndex()
    {
        //$productview = 'category';
        //return $this->render('index',['productview'=>$productview]);
        $user_id = Yii::$app->user->identity->getId();
        $username = User::findOne(['id' => $user_id])->username;
        $model = new ActiveDataProvider([
            'query' => Projects::find()->where(['posted_by' => $user_id]),
            'pagination' => [
                'pageSize' => 20
            ]
        ]);
        return $this->render('index', [
            'model' => $model,
            'username' => $username
        ]);
    }
    public function actionCreate()
    {
        $model = new Projects();
        if($model->load(Yii::$app->request->post())){
            $model->posted_by = Yii::$app->user->identity->getId();
            $image = UploadedFile::getInstance($model,'image');
            $image->saveAs('images/upload/'.$image->baseName.'.'.$image->extension);
            $model->image = $image->baseName.'.'.$image->extension;
            if($model->save(false)){
                return $this->redirect(['view','id'=>$model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model
        ]);
    }
    public function actionUpdate($id)
    {
        $user_id = Yii::$app->user->identity->getId();
        $model = Projects::findOne(['id'=>$id,'posted_by'=>$user_id]);
        if($model->load(Yii::$app->request->post())){
            $model->posted_by = Yii::$app->user->identity->getId();
            $image = UploadedFile::getInstance($model,'image');
            $image->saveAs('images/upload/'.$image->baseName.'.'.$image->extension);
            $model->image = $image->baseName.'.'.$image->extension;
            if($model->save(false)){
                return $this->redirect(['view','id'=>$id]);
            }
        }
        return $this->render('update', [
            'model' => $model
        ]);
    }
    public function actionView($id)
    {
        $user_id = Yii::$app->user->identity->getId();
        $model = Projects::findOne(['id'=>$id, 'posted_by'=>$user_id]);
        $username = User::findOne(['id'=>$user_id])->username;

        return $this->render('view', [
            'model' => $model,
            'username' => $username
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

}