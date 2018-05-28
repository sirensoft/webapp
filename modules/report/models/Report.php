<?php

namespace modules\report\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property int $id
 * @property string $name ชื่อรายงาน
 * @property string $code คำสัง
 * @property string $db ฐานข้อมูล
 * @property string $coder ผู้เขียน
 * @property string $token รหัส token ส่งไลน์
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'db'], 'string'],
            [['name', 'coder', 'token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อรายงาน',
            'code' => 'คำสัง',
            'db' => 'ฐานข้อมูล',
            'coder' => 'ผู้เขียน',
            'token' => 'รหัส token ส่งไลน์',
        ];
    }
}
