<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car_model".
 *
 * @property int $id_car_model
 * @property int $id_car_mark
 * @property string $name
 */
class CarModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'car_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_car_mark', 'name'], 'required'],
            [['id_car_mark'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_car_model' => 'Id Car Model',
            'id_car_mark' => 'Id Car Mark',
            'name' => 'Name',
        ];
    }
}
