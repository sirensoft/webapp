<?php

use kartik\grid\GridView;
use yii\widgets\ActiveForm;
?>
<h1>รายการข้อมูล</h1>

<?php
ActiveForm::begin([
    'method' => 'GET'
]);
?>
วันที่ <input name="date1" value="<?= !empty($date1) ? $date1 : '' ?>" /> ถึง  <input name="date2" value="<?= !empty($date2) ? $date2 : '' ?>" />
<button type="submit"> ตกลง </button>
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

<?=$sql?>

footer


