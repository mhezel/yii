<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\components\SmallBody;
?>
<div class="card" style="width: 50rem">
        <section class="card-body">
            <h2><a href="<?=Url::to(['/site/view','id'=>$model->id])?>"><?=$model->title?></a></h2>
            <p><?= SmallBody::widget(['body' => $model->body, 'count' => 50]) ?></p>
                <footer class="card-text">Posted by
                <a href="<?= Url::to(['/posts/user', 'id' => $model->posted_by]) ?>"><?= $model->user->username?></a> on <?= $model->created_at ?>
                </footer>
        </section>
</div>
<br>

