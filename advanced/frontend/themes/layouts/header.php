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
									<a href="<?=Url::to(['/projects/index'])?>">Projects</a>
                                        <ul>
                                            <li><a href="<?=Url::to(['/projects/create'])?>">Add a Project</a></li>
                                                    <li>
                                                        <a href="<?=Url::to(['/projects/index'])?>">View Projects</a>
                                                            <ul>
                                                                <li><a href="#">Project 1</a></li>
                                                                <li><a href="#">Project 2</a></li>
                                                                <li><a href="#">Project 3</a></li>
                                                                <li><a href="#">Project 4</a></li>
                                                                <li><a href="#">Project 5</a></li>
                                                            </ul>
                                                    </li>
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
        </section>
   