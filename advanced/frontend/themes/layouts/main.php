<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?> Mhezel Mohammad</title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>
    <?=$this->render('header')?>
        <div class="container">
            <?= Breadcrumbs::widget(['links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],])?>
            <?= Alert::widget() ?>
            <?= $content?>
        </div>
    <?=$this->render('footer')?>

<?php $this->endBody() ?>
</html>
<?php $this->endPage();
