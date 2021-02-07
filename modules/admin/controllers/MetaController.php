<?php


namespace app\modules\admin\controllers;


use app\models\Brand;
use app\models\Model;
use yii\helpers\ArrayHelper;
use zxbodya\yii2\imageAttachment\ImageAttachmentAction;

trait MetaController
{
    public function actions()
    {
        return [
            'imgAttachApi' => [
                'class' => ImageAttachmentAction::className(),
                // mappings between type names and model classes (should be the same as in behaviour)
                'types' => [
                    'post' => $this->getClassName()
                ]
            ],
        ];
    }
    protected function getBrandList()
    {
        return ArrayHelper::map(Brand::find()->orderBy('title')->all(), 'slug', 'title');
    }

    protected function getModelList()
    {
        return ArrayHelper::map(Model::find()->orderBy('title')->all(), 'slug', 'title');
    }
}