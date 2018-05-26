<?php

namespace frontend\controllers;

class DataController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionTest1() {
        $num1 = 10;
        $num2 = 45;
        $sum = $num1 + $num2;

        return $this->render('test1', [
                    'sum' => $sum,
                    'name' => 'ooooo'
        ]);
    }

    public function actionTest2($a=0, $b=0) {
        $sum = $a + $b;
        return $this->render('test2', [
              'sum' => $sum,
                    
        ]);
    }
    
    public function actionData1($date1=null,$date2=null){
        
        $sql = "select * from person where birth between '$date1' and '$date2' ";
        if(empty($date1)){
            $sql = "select * from person";
        }
        
        $raw = \Yii::$app->db->createCommand($sql)->queryAll();
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$raw
        ]);
        return $this->render('data1',[
            'dataProvider'=>$dataProvider,
            'date1'=>$date1,
            'date2'=>$date2,
            'sql'=>$sql
        ]);
        
    }

}
