<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schools`.
 */
class m170423_133501_create_schools_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('schools', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'location' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('schools');
    }
}
