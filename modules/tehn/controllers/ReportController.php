<?php

namespace modules\tehn\controllers;

use yii\web\Controller;

class ReportController extends Controller {

    public function actionReport1() {

        return $this->render('report1');
    }
    
    public function actionExcel(){
       $fmt=\Yii::$app->formatter;
        $filePath = "./excel/report1.xls";
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        $excel = $objReader->load($filePath);
        // พื้นที่ ใส่ข้อมูล
        $excel->getActiveSheet()->setCellValue('C1','ข้อความที่ yii เขียน');
        // จบพื้นที่ใส่ข้อมูล
        $objWriter = \PHPExcel_IOFactory::createWriter($excel, 'Excel5');
        $objWriter->save($filePath);
        $date = date('yyyy-mm-dd');
        \Yii::$app->response->sendFile($filePath, "rpt_$date.xls");
    }

}
