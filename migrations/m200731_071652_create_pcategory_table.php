<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pcategory}}`.
 */
class m200731_071652_create_pcategory_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pcategory}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'slug' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pcategory}}');
    }
}
