<!-- Projects -->
<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use frontend\components\SmallBody;
?>
<h1>Welcome to Projects</h1>
<section>
        <header class="major">
            <h2>Projects Gallery Portfolio</h2>
                <?php
                $counter = 1;
                foreach($model as $projects){
                    if($counter == 1){ ?>
            <div class="row">
            <div class="col-4 col-6-medium col-12-small">
                    <div class="col-4-md-6">
                        <section class="box">
                            <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                            <header>
                                <h3><?=$projects->title?></h3>
                            </header>
                            <?=SmallBody::widget(['body'=>$projects->body,'count'=>8])?>
                            <footer>
                                <ul class="actions">
                                    <li><a href="<?=Url::to(['view','id'=>$projects->id])?>"class="btn btn-primary btn-sm">View</a></li>
                                    <li><a href="<?=Url::to(['update','id'=>$projects->id])?>"class="btn btn-secondary btn-sm">Update</a></li>
                                    <li><a href="<?=Url::to(['delete','id'=>$projects->id])?>"class="btn btn-danger btn-sm">Delete</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div>
                </div>
              <?php } else { ?>
                  <div class="col-4 col-6-medium col-12-small">
                    <div class="col-4-md-6">
                        <section class="box">
                            <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                            <header>
                                <h3><?=$projects->title?></h3>
                            </header>
                            <?=SmallBody::widget(['body'=>$projects->body,'count'=>8])?>
                            <footer>
                                <ul class="actions">
                                    <li><a href="<?=Url::to(['view','id'=>$projects->id])?>"class="btn btn-primary btn-sm">View</a></li>
                                    <li><a href="<?=Url::to(['update','id'=>$projects->id])?>"class="btn btn-secondary btn-sm">Update</a></li>
                                    <li><a href="<?=Url::to(['delete','id'=>$projects->id])?>"class="btn btn-danger btn-sm">Delete</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div>
                  </div>
              <?php }
                    $counter++;
                    if ($counter>3) {
                        $counter = 1;
                        echo "</div>";
                        echo "<br>"."<br>";
                    }?>
         <?php }
                ?>
            </div>
</section>
</div>

