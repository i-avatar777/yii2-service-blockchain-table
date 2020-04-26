CREATE TABLE `blockchain_transaction` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    row_id          int                  null,
    table_id          int                  null,
    created_at          int                  null,
    hash                varchar(64)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `blockchain_block` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    hash                varchar(64)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `blockchain_table` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    name                varchar(100)          null,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;