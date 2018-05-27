<?php

use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;
?>
<h1>รายการข้อมูล</h1>

<?php
ActiveForm::begin([
    'method' => 'GET'
]);
?>

<div style="width: 500px">
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
        //'form' => $form,
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
        ]
    ]);
    ?>

    <button type="submit"> ตกลง </button>
</div>

<?php
ActiveForm::end();
?>

<?php
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'panel' => [
        'before' => 'รายการ...'
    ]
]);
?>

<?= $sql ?>

footer


