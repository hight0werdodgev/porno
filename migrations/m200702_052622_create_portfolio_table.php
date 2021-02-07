<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%portfolio}}`.
 */
class m200702_052622_create_portfolio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%portfolio}}', [
            'id' => $this->primaryKey(),
            'brand_slug' => $this->string(),
            'model_slug' => $this->string(),
            'title' => $this->string(),
            'slug' => $this->string(),
            'content' => $this->text(),
            'keywords' => $this->text(),
            'meta_description' => $this->text(),
            'date' => $this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%portfolio}}');
    }
}
