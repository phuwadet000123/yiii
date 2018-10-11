<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cs_student".
 *
 * @property int $st_id
 * @property string $st_name
 * @property string $st_lname
 * @property string $st_code
 * @property string $st_contact
 * @property string $st_address
 * @property string $st_school
 * @property int $class_id
 * @property string $st_img
 *
 * @property CsClass $class
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cs_student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['st_contact', 'st_address'], 'string'],
            [['class_id'], 'default', 'value' => null],
            [['class_id'], 'integer'],
            [['st_name', 'st_lname'], 'string', 'max' => 250],
            [['st_code'], 'string', 'max' => 13],
            [['st_school', 'st_img'], 'string', 'max' => 100],
            [['class_id'], 'exist', 'skipOnError' => true, 'targetClass' => CsClass::className(), 'targetAttribute' => ['class_id' => 'class_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {   
        return [
            'st_id' => 'Student ID',
            'st_name' => 'First Name',
            'st_lname' => 'Last Name',
            'st_code' => 'Student Code',
            'st_contact' => 'Contact',
            'st_address' => 'Address',
            'st_school' => 'Went School',
            'class_id' => 'Year',
            'st_img' => 'Photo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(CsClass::className(), ['class_id' => 'class_id']);
    }
}
