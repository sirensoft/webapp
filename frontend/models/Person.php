<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "person".
 *
 * @property int $id
 * @property string $prename
 * @property string $fname
 * @property string $lname
 * @property string $birth
 * @property string $sex
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birth'], 'safe'],
            [['sex'], 'string'],
            [['prename'], 'string', 'max' => 3],
            [['fname', 'lname'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prename' => 'Prename',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'birth' => 'Birth',
            'sex' => 'Sex',
        ];
    }
}
