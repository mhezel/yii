<?php
use yii\helpers\Url;
$this->title = 'Product Menu';
?>
<div class = list-group>
    <a href="<?=Url::to(['/product/detail','id'=> 1,'name'=>'Mhezel'])?>"class="list-group-item">Menu 1</a>
    <a href="<?=Url::to(['/product/detail','id'=> 2,'name'=>'Mhezelkhan'])?>"class="list-group-item">Menu 2</a>
    <a href="<?=Url::to(['/product/detail','id'=> 3,'name'=>'Admin'])?>"class="list-group-item">Menu 3</a>
    <a href="<?=Url::to(['/product/detail','id'=> 4,'name'=>'User'])?>"class="list-group-item">Menu 4</a>
</div>