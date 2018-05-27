<?php
use yii\helpers\Html;
?>
<h1>กลุ่มรายงานแผนก OPD</h1>
<ul>
    <li>
        <?=Html::a('รายงานจำนวนผู้ป่วยนอกทั้งหมด', ['report/report1'])?>
    
        
    </li>
    <li>
        <?=Html::a('รายงานจำนวนผู้ป่วยนอกสิทธิ UC',['data/data1'])?>
        
    </li>
</ul>