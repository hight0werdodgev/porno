<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $meta_description
 */
class Brand extends \yii\db\ActiveRecord
{
    use MetaModel;

    public $coverPath = '/upload/images/brand/cover';

    public static function tableName()
    {
        return 'brand';
    }

    public function rules()
    {
        return [
            [['meta_description'], 'string'],
            [['title', 'slug',], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Марка автомобиля',
            'meta_description' => 'Описание для мета-тегов',
        ];
    }

    public function getPortfolio()
    {
        return $this->hasMany(Portfolio::className(), ['brand_slug' => 'slug']);
    }
}
