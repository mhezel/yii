<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/** @var yii\web\View $this */?>
<?php $this->title = 'Product Index';?>


<div class="container">
    <?php /*$this->render('partialview',['productview'=>$productview]) */?>
    <h2>List of Projects in GridView</h2>
        <?php echo $username ?>
        <a href="<?=Url::to(['create.php'])?>" class="btn btn-success fa-pull-right">Create Project</a>
    <?php
    echo GridView::widget([
            'dataProvider'=>$model,
            'columns'=>[
                    ['class'=>'yii\grid\SerialColumn'],
                    [
                            'attribute'=>'posted_by',
                            'value'=>'',
                    ],
                    'title',
                    [
                           'attribute'=>'created_at',
                            'format'=>['date']
                    ],
                    ['class'=>'yii\grid\ActionColumn'],
            ]
    ]);
    ?>
</div>



