<?php

use yii\db\Migration;

/**
 * Class m180517_142610_create_tbl_product
 */
class m180517_142610_create_tbl_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250),
            'seo' => $this->string(250),
            'article' => $this->string(20),
            'quantity' => $this->integer(),
            'created_at' => 'timestamp with time zone NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at' => 'timestamp with time zone NOT NULL DEFAULT CURRENT_TIMESTAMP',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }

}
