<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container">
    <h3>Update Project</h3>
    <?php $form = ActiveForm::begin()?>
    <?= $form->field($model,'title')->textInput()?>
    <?= $form->field($model,'body')->textarea(['rows'=>5])?>
    <?= $form->field($model,'image')->fileInput();?>
    <?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
    <?php ActiveForm::end()?>
</div>
