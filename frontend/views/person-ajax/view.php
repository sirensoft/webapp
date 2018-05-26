<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Person */
?>
<div class="person-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'prename',
            'fname',
            'lname',
            'birth',
            'sex',
        ],
    ]) ?>

</div>
