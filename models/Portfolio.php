<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int|null $brand_slug
 * @property int|null $model_slug
 * @property int|null $category_slug
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $content
 * @property string|null $meta_description
 * @property string|null $date
 */
class Portfolio extends \yii\db\ActiveRecord
{
    use MetaModel;

    public $coverPath = '/upload/images/portfolio/cover';

    public static function tableName()
    {
        return 'portfolio';
    }

    public function rules()
    {
        return [
            [['brand_slug', 'model_slug', 'content', 'meta_description', 'category_slug'], 'string'],
            [['date'], 'safe'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
            [['content', 'title', 'brand_slug', 'model_slug', 'category_slug'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_slug' => 'Марка Авто',
            'model_slug' => 'Модель',
            'category_slug' => 'Категория',
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'meta_description' => 'Описание для мета-тэгов',
            'date' => 'Date',
        ];
    }

    public static function getPortfolios($slug)
    {
        return self::find()->where(['category_slug' => $slug])->all();
    }
}
