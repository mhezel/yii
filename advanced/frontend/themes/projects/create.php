<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Submit your own Project Entry! </h1>

<div class="container-fluid">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']])?>
<?= $form->field($model,'title')->textInput()?>
<?= $form->field($model,'body')->textarea(['rows'=>5])?>
<?= $form->field($model,'image')->fileInput();?><br>
<?php/* $form->field($model, 'image')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
]);*/?>
<?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php ActiveForm::end()?>

</div>
