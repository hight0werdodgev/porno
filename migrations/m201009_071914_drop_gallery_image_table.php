<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%gallery_image}}`.
 */
class m201009_071914_drop_gallery_image_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('{{%gallery_image}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%gallery_image}}', [
            'id' => $this->primaryKey(),
        ]);
    }
}
