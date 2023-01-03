<?php
/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
?>
<h1>Submit your own Project Entry! </h1>
<div class="container-fluid">
<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']])?>
<?= $form->field($model,'title')->textInput()?>
<?php //$form->field($model,'body')->textarea(['rows'=>5])*/ ?>
    <?= $form->field($model, 'body')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'en',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>
<?= $form->field($model,'image')->fileInput();?><br>
<?=Html::submitButton('Submit',['class'=>'btn btn-primary'])?>
<?php ActiveForm::end()?>

</div>
