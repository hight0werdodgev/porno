<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%portfolio}}`.
 */
class m200827_041341_drop_keywords_column_from_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('portfolio', 'keywords');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('portfolio', 'keywords', $this->string());
    }
}
