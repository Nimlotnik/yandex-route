<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "auto_arenda".
 *
 * @property int $id
 * @property string $marka
 * @property string $model
 * @property string $year
 * @property int $type_gbo
 * @property int $type_kpp
 * @property string $photo
 * @property string $description
 * @property string $phone
 * @property int $maska_svobody
 * @property int $price
 * @property int $maska_vykyp
 * @property string $gos_number
 */
class AutoArenda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auto_arenda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['marka', 'model', 'year', 'type_gbo', 'type_kpp', 'description', 'phone', 'maska_svobody', 'price', 'maska_vykyp', 'gos_number'], 'required'],
            [['marka', 'model', 'year', 'photo', 'description', 'phone', 'gos_number'], 'string'],
            [['type_gbo', 'type_kpp', 'maska_svobody', 'price', 'maska_vykyp'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marka' => 'Marka',
            'model' => 'Model',
            'year' => 'Year',
            'type_gbo' => 'Type Gbo',
            'type_kpp' => 'Type Kpp',
            'photo' => 'Photo',
            'description' => 'Description',
            'phone' => 'Phone',
            'maska_svobody' => 'Maska Svobody',
            'price' => 'Price',
            'maska_vykyp' => 'Maska Vykyp',
            'gos_number' => 'Gos Number',
        ];
    }
}
