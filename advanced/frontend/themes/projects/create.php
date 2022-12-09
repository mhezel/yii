<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Submit your own Project Entry! </h1>

<div class="container">
<?php $form = ActiveForm::begin()?>
<?= $form->field($model,'title')->textInput()?>
<?= $form->field($model,'body')->textarea(['rows'=>5])?>
<?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>

<?php ActiveForm::end()?>
</div>
