<?php

use yii\db\Migration;

/**
 * Class m180519_082941_create_tbl_geodata
 */
class m180519_082941_create_tbl_geodata extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('geodata', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'lat' => $this->string(255),
            'lng' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('geodata');
    }

}
