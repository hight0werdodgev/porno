<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pcategory".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property int|null $parent
 * @property string $meta_description [varchar(255)]
 */
class Pcategory extends \yii\db\ActiveRecord
{
    use MetaModel;

    public $coverPath = '/upload/images/pcategory/cover';

    public static function tableName()
    {
        return 'pcategory';
    }

    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
            [['meta_description'], 'string', 'max' => 255],
            [['parent'], 'integer'],
            [['title'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название категории',
            'slug' => 'Slug',
            'parent' => 'Родительская категория',
            'meta_description' => 'Описание для мета тегов'
        ];
    }
}
