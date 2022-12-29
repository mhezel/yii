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
        <a href="<?=Url::to(['/product/create'])?>"class="btn btn-success fa-pull-right">Add a Project</a>
    <?php
    echo GridView::widget([
            'dataProvider'=>$model,
            'columns'=>[
                    ['class'=>'yii\grid\SerialColumn'],
                    [
                            'attribute'=>'posted_by',
                            'value'=>'user.username'
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



