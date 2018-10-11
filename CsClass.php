<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cs_class".
 *
 * @property int $class_id
 * @property string $class_name
 *
 * @property CsStudent[] $csStudents
 */
class CsClass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cs_class';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'class_name' => 'Class Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCsStudents()
    {
        return $this->hasMany(CsStudent::className(), ['class_id' => 'class_id']);
    }
}
