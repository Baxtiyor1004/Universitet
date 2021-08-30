<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%lessons}}`.
 */
class m210830_051453_create_lessons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%lessons}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'weekday' => $this->string(255)->notNull(),
            'start_time' => $this->time()->notNull(),
            'end_time' => $this->time()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'teacher_id' => $this->integer(10)->notNull(),
            'class_id' => $this->integer(10)->notNull(),
            'group_id' => $this->integer(10)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%lessons}}');
    }
}
