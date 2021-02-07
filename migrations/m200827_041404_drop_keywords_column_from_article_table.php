<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%article}}`.
 */
class m200827_041404_drop_keywords_column_from_article_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('article', 'keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('article', 'keywords', $this->string());
    }
}
