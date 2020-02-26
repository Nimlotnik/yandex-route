<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mail_drivers".
 *
 * @property int $id
 * @property string $family
 * @property string $name
 * @property string $last_name
 * @property string $phone
 * @property string $vu_seria
 * @property string $vu_number
 * @property string $vu_date_start
 * @property string $vu_date_stop
 * @property string $sts_marka
 * @property string $sts_model
 * @property string $sts_year
 * @property string $sts_color
 * @property string $sts_gosnumber
 */
class MailDrivers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mail_drivers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['family', 'name', 'last_name', 'phone', 'vu_seria', 'vu_number', 'vu_date_start', 'vu_date_stop', 'sts_marka', 'sts_model', 'sts_year', 'sts_color', 'sts_gosnumber'], 'required'],
            [['family', 'name', 'last_name'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 30],
            [['vu_seria', 'sts_year', 'sts_gosnumber'], 'string', 'max' => 10],
            [['vu_number'], 'string', 'max' => 20],
            [['vu_date_start', 'vu_date_stop', 'sts_marka', 'sts_model', 'sts_color'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'family' => 'Family',
            'name' => 'Name',
            'last_name' => 'Last Name',
            'phone' => 'Phone',
            'vu_seria' => 'Vu Seria',
            'vu_number' => 'Vu Number',
            'vu_date_start' => 'Vu Date Start',
            'vu_date_stop' => 'Vu Date Stop',
            'sts_marka' => 'Sts Marka',
            'sts_model' => 'Sts Model',
            'sts_year' => 'Sts Year',
            'sts_color' => 'Sts Color',
            'sts_gosnumber' => 'Sts Gosnumber',
        ];
    }
}
