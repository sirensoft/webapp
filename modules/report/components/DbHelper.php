<?php

namespace modules\report\components;


class DbHelper {
   

    private static function exec_sql($sql = NULL,$db) {        
        return \Yii::$app->$db->createCommand($sql)->execute();
    }

    private static function query_all($sql = NULL,$db) {        
        return \Yii::$app->$db->createCommand($sql)->queryAll();
    }

    private static function query_one($sql = NULL,$db) {        
        return \Yii::$app->$db->createCommand($sql)->queryOne();
    }

    public static function createAndRunProc($proc_name = null, $sql = null,$db) {

        if (substr($sql, -1) <> ';') {
            $sql = $sql . ";";
        }

        try {
            self::exec_sql("DROP PROCEDURE IF EXISTS $proc_name",$db);
            $sp_build = "CREATE PROCEDURE $proc_name()\r\n";
            $sp_build.=" BEGIN\r\n\r\n";
            $sp_build.= $sql;
            $sp_build.="\r\n\r\nEND";
            self::exec_sql($sp_build,$db);
            //sleep(1);
            return self::query_all("CALL $proc_name;",$db);
        } catch (\yii\db\Exception $e) {
            throw new \yii\db\Exception($e->getMessage());
        }
    }

}
