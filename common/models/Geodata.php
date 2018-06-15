<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "geodata".
 *
 * @property int $id
 * @property string $name
 * @property string $lat
 * @property string $lng
 */
class Geodata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'geodata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lat', 'lng'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'lat' => 'Широта',
            'lng' => 'Долгота',
        ];
    }
}
