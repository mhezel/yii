<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\SmallBody;
?>
<div class="list-group text-justify">
    <section class="box">
        <h2 class="post-title">
            <a href="<?=Url::to(['/site/view','id'=>$model->posted_by])?>"><?=$model->title?></a>
        </h2>
        <p class="post-subtitle">
            <?= SmallBody::widget(['body' => $model->body, 'count' => 50]) ?>
        </p>
    <footer class="post-meta">Posted by
        <a href="<?= Url::to(['/posts/user', 'id' => $model->posted_by]) ?>"><?= $model->user->username?></a>
        on <?= $model->created_at ?></footer>
    </section>
</div>

