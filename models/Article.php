<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $description
 * @property string|null $content
 * @property string|null $meta_description
 * @property string|null $date
 * @property string $alt_image [varchar(255)]
 * @property string $title_image [varchar(255)]
 */
class Article extends \yii\db\ActiveRecord
{
    use MetaModel;

    public $coverPath = '/upload/images/article/cover';

    public static function tableName()
    {
        return 'article';
    }

    public function rules()
    {
        return [
            [['description', 'content', 'meta_description', 'alt_image', 'title_image'], 'string'],
            [['date'], 'safe'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
            [['title', 'description', 'content'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Содержание',
            'meta_description' => 'Описание для мета - тэгов',
            'alt_image' => 'Alt для заглавного изображения',
            'title_image' => 'Title для заглавного изображения',
            'date' => 'Date',
        ];
    }
}
