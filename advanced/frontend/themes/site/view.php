<!-- Projects View -->
<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<div class="container">
            <?php
            echo DetailView::widget([
                'model'=>$model,
                'attributes'=>[
                    'title',
                    'body',
                    [
                        'attribute'=>'created_at',
                        'format'=>['date']
                    ],
                    [
                        'attribute'=>'posted_by',
                        'value'=>$username,
                    ],
                ]
            ]);
            ?>
        </div>
</div>