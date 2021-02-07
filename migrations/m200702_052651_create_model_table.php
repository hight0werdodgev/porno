<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%model}}`.
 */
class m200702_052651_create_model_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%model}}', [
            'id' => $this->primaryKey(),
            'brand_slug' => $this->string(),
            'title' => $this->string(),
            'slug' => $this->string(),
            'keywords' => $this->text()->null(),
            'meta_description' => $this->text()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%model}}');
    }
}
