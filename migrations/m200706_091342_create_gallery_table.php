<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery_image}}`.
 */
class m200706_091342_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%gallery_image}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string(),
            'ownerId' => $this->string()->notNull(),
            'rank' => $this->string()->notNull()->defaultValue(0),
            'name' => $this->string(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gallery_image}}');
    }
}
