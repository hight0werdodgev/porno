<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%pcategory}}`.
 */
class m200814_032658_add_keywords_column_to_pcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pcategory', 'keywords', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pcategory', 'keywords');
    }
}
