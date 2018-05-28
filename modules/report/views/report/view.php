<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
use modules\report\components\DbHelper;
use yii\data\ArrayDataProvider;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model modules\report\models\Report */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <div class="form">
        <?php
        ActiveForm::begin([
            'method' => 'GET'
        ]);
        ?>
        <div style="width: 350px;">
            <?php
            echo DatePicker::widget([
                'language' => 'th',
                'name' => 'date1',
                'name2' => 'date2',
                'value' => $date1,
                'value2' => $date1,
                'options' => ['placeholder' => 'Start date'],
                'options2' => ['placeholder' => 'End date'],
                'type' => DatePicker::TYPE_RANGE,
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'autoclose' => true,
                ]
            ]);
            ?>       
        </div>
        <div style="display: inline-block">
            <button type="submit" class="btn btn-success"> ตกลง </button>
        </div>


        <?php
        ActiveForm::end();
        ?>
    </div>


    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'code:ntext',
            'db',
            'coder',
            'token',
        ],
    ])
    ?>

    <p>ผลลัพธ์</p>
    <?php
    $sql = $model->code;
    $sql = str_replace('$date1', $date1, $sql);
    $sql = str_replace('$date2', $date2, $sql);

    $proc_name = 'report_custom_query_' . $model->id;
    $raw = DbHelper::createAndRunProc($proc_name, $sql, $model->db);
    $dataProvider = new ArrayDataProvider([
        'allModels' => $raw
    ]);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
    ]);
    ?>

</div>
