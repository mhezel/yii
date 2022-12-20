<!-- Projects View -->
<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<h1>Welcome to Projects</h1>
<section>
    <header class="major">
        <h2>Projects</h2>
    </header>
    <div class="container text-center text-justify">
        <h3><?=$model->title?></h3>
        <p><?=$model->body?></p>
        <img class="img-fluid" src="images/pic07.jpg" alt="Responsive image">
    </div>



