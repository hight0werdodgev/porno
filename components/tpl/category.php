<?php
use yii\helpers\Url;

?>

<li>
    <a href="<?=Url::to(['category/view', 'id' => $category['id']])?>">
        <?= $category['title']; ?>
    </a>

    <?php if(isset($category['children'])): ?>

        <div>
            <div>
                <ul>
                    <?= $this->getMenuHtml($category['children']); ?>
                </ul>
            </div>
        </div>

    <?php endif;?>
</li>