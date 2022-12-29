<?php
/** @var yii\web\View $this */
use yii\widgets\ListView;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
;?>
<body>
        <div class="container-fluid">
            <div class="row">
            <h2>Projects in List View</h2>
            <?php echo ListView::widget([
                'dataProvider'=>$model,
                'itemView'=>'_project'
            ])
            ?>
            </div>
        </div>
		<!--<div id="page-wrapper">
			 Main
			<section id="main">
					<div class="row">
						<div class="col-12">
						</div>
					</div>
				</div>
			</section>
		</div>-->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>

