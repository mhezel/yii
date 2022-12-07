<?php
/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <p>This is the About page. You may modify the following file to customize its content:</p>
    <section id="intro" class="container">
        <div class="row">
            <div class="col-4 col-12-medium">
                <section class="first">
                    <i class="icon solid featured fa-cog"></i>
                    <header>
                        <h2>Settings</h2>
                    </header>
                    <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section>
                    <i class="icon solid featured alt fa-bolt"></i>
                    <header>
                        <h2>Insights</h2>
                    </header>
                    <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                </section>
            </div>
            <div class="col-4 col-12-medium">
                <section class="last">
                    <i class="icon solid featured alt2 fa-star"></i>
                    <header>
                        <h2>Top Fans</h2>
                    </header>
                    <p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
                </section>
            </div>
        </div>
        <footer>
            <ul class="actions">
                <li><a href="#" class="button large">Get Started</a></li>
                <li><a href="#" class="button alt large">Learn More</a></li>
            </ul>
        </footer>
    </section>
    <code><?= __FILE__ ?></code>
</div>
