<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%model}}`.
 */
class m200827_041350_drop_keywords_column_from_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('model', 'keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('model', 'keywords', $this->string());
    }
}
