<?php


namespace app\models;


use phpDocumentor\Reflection\Types\This;
use Yii;
use zxbodya\yii2\imageAttachment\ImageAttachmentBehavior;

trait MetaModel
{
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
                'slugAttribute' => 'slug',
                'attribute' => 'title',
                // optional params
                'ensureUnique' => true,
                'replacement' => '-',
                'lowercase' => true,
                'immutable' => false,
                // If intl extension is enabled, see http://userguide.icu-project.org/transforms/general.
                'transliterateOptions' => 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;'
            ],
            'coverBehavior' => [
                'class' => ImageAttachmentBehavior::className(),
                // type name for model
                'type' => 'post',
                // image dimmentions for preview in widget
                'previewHeight' => 200,
                'previewWidth' => 300,
                // extension for images saving
                'extension' => 'jpg',
                // path to location where to save images
                'directory' => Yii::getAlias('@webroot') . $this->coverPath,
                'url' => Yii::getAlias('@web') . $this->coverPath,
                // additional image versions
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->resize($img->getSize()->widen(200));
                    },
                    'medium' => function ($img) {
                        /** @var ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return [
                            $img->copy()->resize($dstSize),
                            ['jpeg_quality' => 80], // options used when saving image (Imagine::save)
                        ];
                    },
                ]
            ]
        ];
    }

    public static function getSingle(string $slug)
    {
        return self::find()->where(['slug' => $slug])->one();
    }
}