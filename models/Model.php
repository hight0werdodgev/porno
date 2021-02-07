<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "model".
 *
 * @property int $id
 * @property int|null $brand_slug
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $meta_description
 */
class Model extends \yii\db\ActiveRecord
{
    use MetaModel;

    public $coverPath = '/upload/images/model/cover';

    public static function tableName()
    {
        return 'model';
    }

    public function rules()
    {
        return [
            [['meta_description'], 'string'],
            [['title', 'brand_slug'], 'string', 'max' => 255],
            [['brand_slug', 'title'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_slug' => 'Марка Авто',
            'title' => 'Название модели',
            'meta_description' => 'Описание для мета-тегов',
        ];
    }
}
