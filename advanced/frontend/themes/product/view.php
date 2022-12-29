<!-- Projects View -->
<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<section>
    <header class="major">
        <h2>Projects Gallery</h2>
    </header>
    <div class="container text-justify">
    <?php
    echo DetailView::widget([
            'model'=>$model,
            'attributes'=>[
                    'title',
                    'body',
                    [
                            'attribute'=>'created_at',
                            'format'=>'date'
                    ],
                    [
                           'attribute'=>'posted_by',
                            'value'=>$model->user->username,
                    ],
                    [
                        'attribute'=>'image',
                        'value'=>'/images/upload/' .$model->image,
                        'format' => ['image',['width'=>'230','height'=>'200']],
                    ],
            ]
    ]);
    ?>
    </div>
    <!--<h3>/*=$model->title?></h3>
        <p>/*$model->body?></p>
        <a>posted by:/*$username?></a>-->
