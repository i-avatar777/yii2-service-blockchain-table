<?php

use yii\db\Migration;

/**
 * Class m200425_214721_koop
 */
class m200425_214721_koop extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute('CREATE TABLE `blockchain_transaction` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
    row_id          int                  null,
    table_id          int                  null,
    created_at          int                  null,
    hash                varchar(64)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->execute('CREATE TABLE `blockchain_block` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
    hash                varchar(64)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
        $this->execute('CREATE TABLE `blockchain_table` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
    name                varchar(100)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200425_214721_koop cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200425_214721_koop cannot be reverted.\n";

        return false;
    }
    */
}
