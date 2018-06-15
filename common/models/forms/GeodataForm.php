<?php

namespace common\models\forms;

use yii\base\Model;

/**
 * Class GeodataForm
 * @package common\models\forms
 */
class GeodataForm extends Model
{
    public $name;
    public $lat;
    public $lng;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'lat', 'lng'], 'required'],
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