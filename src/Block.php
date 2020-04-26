<?php

namespace iAvatar777\service\BlockchainTable;


/**
 * Class Block
 *
 * @property int    id
 * @property string hash
 *
 * @package iAvatar777\service\BlockchainTable
 */
class Block extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'blockchain_block';
    }
}