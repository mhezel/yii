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
            <h2>Projects</h2>
        </header>
        <div class="container">
        <div class="row">
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                    <header>
                        <h3>Ipsum feugiat et dolor</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button alt">Find out more</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                    <header>
                        <h3>Sed etiam lorem nulla</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button alt">Find out more</a></li>
                        </ul>
                    </footer>

                </section>
            </div>
            <div class="col-4 col-6-medium col-12-small">
                <section class="box">
                    <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                    <header>
                        <h3>Consequat et tempus</h3>
                    </header>
                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button alt">Find out more</a></li>
                        </ul>
                    </footer>
                </section>
            </div>
            <div>
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
                                    <li><a href="<?=Url::to(['update','id'=>$projects->id])?>"class="btn btn-secondary btn-sm">Update Project</a></li>
                                    <li><a href="<?=Url::to(['delete','id'=>$projects->id])?>"class="btn btn-danger btn-sm">Delete Project</a></li>
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
                                    <li><a href="<?=Url::to(['update','id'=>$projects->id])?>"class="btn btn-secondary btn-sm">Update Project</a></li>
                                    <li><a href="<?=Url::to(['delete','id'=>$projects->id])?>"class="btn btn-danger btn-sm">Delete Project</a></li>
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

