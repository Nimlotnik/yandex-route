<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "drivers".
 *
 * @property string $position
 * @property string $name
 * @property string $vin
 */
class Drivers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'drivers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'name', 'vin'], 'required'],
            [['position'], 'string', 'max' => 50],
            [['name', 'vin'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'position' => 'Position',
            'name' => 'Name',
            'vin' => 'Vin',
        ];
    }
}
