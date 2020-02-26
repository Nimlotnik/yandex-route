<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_mark".
 *
 * @property int $id_car_mark
 * @property string $name
 */
class CarMark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_mark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_car_mark' => 'Id Car Mark',
            'name' => 'Name',
        ];
    }
}
