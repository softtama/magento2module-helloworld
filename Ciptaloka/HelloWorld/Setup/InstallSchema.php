<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */

namespace Ciptaloka\HelloWorld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        // Get `ciptaloka_helloworld` table
        $tableName = $installer->getTable('ciptaloka_helloworld');
        // Check if the table already exists
        if (!$installer->getConnection()->isTableExists($tableName))
        {
            // Create the table
            $table = $installer->getConnection()
                ->newTable($installer->getTable('ciptaloka_helloworld'))
                ->addColumn(
                    'id',
                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                    'Id'
                )
                ->addColumn(
                    'label',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    ['default' => null, 'nullable' => false],
                    'Name'
                )
                ->addColumn(
                    'value',
                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    null,
                    ['default' => null, 'nullable' => false],
                    'Stores'
                );

            $installer->getConnection()->createTable($table);
        }

        $installer->endSetup();
    }
}
