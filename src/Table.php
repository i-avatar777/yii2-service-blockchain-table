<?php

namespace iAvatar777\service\BlockchainTable;


/**
 * Class Block
 *
 * @property int    id
 * @property string name
 *
 * @package iAvatar777\service\BlockchainTable
 */
class Table extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blockchain_table';
    }
}