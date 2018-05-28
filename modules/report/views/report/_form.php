<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model modules\report\models\Report */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="report-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'code')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'db')->dropDownList([ 'db_hosxp' => 'Db hosxp', 'db_dhdc' => 'Db dhdc', 'db_thairefer' => 'Db thairefer', 'db_EClaim' => 'Db EClaim', 'db_iswin' => 'Db iswin', 'db_jhcis' => 'Db jhcis', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'coder')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
