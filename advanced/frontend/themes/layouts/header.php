<?php
use yii\helpers\Url;
use yii\helpers\html;
?>
<!-- Header -->
        <section id="header">
					<!-- Logo -->
						<h1><a href="<?=Url::base()?>">Mhezel Mohammad</a></h1>
					<!-- Nav -->
						<nav id="nav">
							<ul>
                                <li class="current"><a href="<?=Url::base()?>">Home</a></li>
								<li>
									<a href="#">Projects</a>
                                        <ul>
                                                <li><a href="#">Lorem ipsum dolor</a></li>
                                                <li><a href="#">Magna phasellus</a></li>
                                                <li><a href="#">Etiam dolore nisl</a></li>
                                                    <li>
                                                        <a href="#">Phasellus consequat</a>
                                                            <ul>
                                                                <li><a href="#">Magna phasellus</a></li>
                                                                <li><a href="#">Etiam dolore nisl</a></li>
                                                                <li><a href="#">Veroeros feugiat</a></li>
                                                                <li><a href="#">Nisl sed aliquam</a></li>
                                                                <li><a href="#">Dolore adipiscing</a></li>
                                                            </ul>
                                                    </li>
                                                <li><a href="#">Veroeros feugiat</a></li>
                                        </ul>
                                <li><a href="<?=Url::to(['/site/about'])?>">About</a></li>
                                <li><a href="<?=Url::to(['/site/contact'])?>">Contact</a></li>
                                <li><a href="<?=Url::to(['/product/index'])?>">Product</a></li>

                                <?php if (Yii::$app->user->isGuest) {?>

                                <li><a href="<?=Url::to(['/site/signup'])?>">Sign Up</a></li>
                                <li><a href="<?=Url::to(['/site/login'])?>">Login In</a></li>
                                      <?php }
                                      else{  /*Log-out form only accepts $_POST Method input*/
                                          echo '<li>'.html::beginForm(['/site/logout']);
                                          echo html::submitButton('Log-Out('.Yii::$app->user->identity->username.')',['class'=>'btn-link']);
                                          echo html::endForm().'</li>';
                                      }?>
							</ul>
						</nav>
					<!-- Banner -->
						<section id="banner">
							<header>
								<h2>Hello Welcome to my Web Portfolio</h2>
								<p>A responsive web design template</p>
							</header>
				        </section>
                    <!-- Intro -->
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
                            <section class="middle">
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
        </section>
   