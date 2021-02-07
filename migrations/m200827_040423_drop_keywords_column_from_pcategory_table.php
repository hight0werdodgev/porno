<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%pcategory}}`.
 */
class m200827_040423_drop_keywords_column_from_pcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('pcategory', 'keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('pcategory', 'keywords', $this->string());
    }
}
