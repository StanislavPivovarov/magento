<?php

$installer = $this;
$tableBanner = $installer->getTable('ainstainer/banner');

$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($tableBanner)
    ->addColumn('banner_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
    ))
    ->addColumn('url', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('image', Varien_Db_Ddl_Table::TYPE_TEXT, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('position', Varien_Db_Ddl_Table::TYPE_VARCHAR, '255', array(
        'nullable'  => true,
    ))
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable'  => true,
    ))
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable'  => true,
    ))
    ->addColumn('created', Varien_Db_Ddl_Table::TYPE_DATETIME, null, array(
        'nullable'  => true,
    ));
$installer->getConnection()->createTable($table);

$installer->endSetup();
