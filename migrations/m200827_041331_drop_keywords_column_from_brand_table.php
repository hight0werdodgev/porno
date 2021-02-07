<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%brand}}`.
 */
class m200827_041331_drop_keywords_column_from_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('brand', 'keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('brand', 'keywords', $this->string());
    }
}
