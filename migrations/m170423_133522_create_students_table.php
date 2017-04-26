<?php

use yii\db\Migration;

/**
 * Handles the creation of table `students`.
 * Has foreign keys to the tables:
 *
 * - `schools`
 */
class m170423_133522_create_students_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('students', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'surname' => $this->string(),
            'school_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `school_id`
        $this->createIndex(
            'idx-students-school_id',
            'students',
            'school_id'
        );

        // add foreign key for table `schools`
        $this->addForeignKey(
            'fk-students-school_id',
            'students',
            'school_id',
            'schools',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `schools`
        $this->dropForeignKey(
            'fk-students-school_id',
            'students'
        );

        // drops index for column `school_id`
        $this->dropIndex(
            'idx-students-school_id',
            'students'
        );

        $this->dropTable('students');
    }
}
