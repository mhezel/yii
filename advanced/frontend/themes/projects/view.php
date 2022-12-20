<!-- Projects View -->
<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<section>
    <header class="major">
        <h2>Projects</h2>
    </header>
    <div class="container text-justify">
        <h3><?=$model->title?></h3>
        <p><?=$model->body?></p>
        <a>posted by: <?=$username?></a>
    </div>
