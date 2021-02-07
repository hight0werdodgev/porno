<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%pcategory}}`.
 */
class m200814_032702_add_meta_description_column_to_pcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('pcategory', 'meta_description', $this->string());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('pcategory', 'meta_description');
    }
}
