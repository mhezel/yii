<!-- Projects View -->
<?php
/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<div class="container">
    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <td><?= $user->id ?></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><?= $user->username ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $user->email ?></td>
        </tr>
    </table>
            <?php
            echo DetailView::widget([
                'model'=>$model,
                'attributes'=>[
                    'title',
                    'body',
                    [
                        'attribute'=>'created_at',
                        'format'=>'date'
                    ],
                    'project.name',
                ]
            ]);
            ?>
        </div>
</div>