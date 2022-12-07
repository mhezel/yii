<?php

use yii\helpers\html;
$this->title = 'Product Detail';
?>

<h1>Welcome to details</h1>
<h3>Id: <strong><?=$id?></strong></h3>
<h3>Name: <strong><?=$name?></strong></h3>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= Html::beginForm() ?>
            <div class="form-group">
                <label class="">Name</label>
                <?= Html::input('text', 'name', '', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <label class="">Password</label>
                <?= Html::input('password', 'password', '', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <label class="">Address</label>
                <?= Html::textarea('address',null,['class'=>'form-control','rows'=>5]) ?>
            </div>
            <div class="form-group">
                <?=Html::label('Title','prefix',[]) ?>
                <?= Html::dropDownList('prefix',null,['mr'=>'Mr','mrs'=>'Mrs','master'=>'Master']) ?>
            </div>


            <?= Html::endForm() ?>

        </div>
    </div>
</div>
<?=html::style('
.red{color:red;}
');?>
