<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%portfolio}}`.
 */
class m200731_090856_add_category_slug_column_to_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('portfolio', 'category_slug', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('portfolio', 'category_slug');
    }
}
