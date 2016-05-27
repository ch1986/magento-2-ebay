<?php

namespace Softwarech\Magento2Ebay\Setup;
 
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;
 
class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $upgrader = $setup->startSetup();
 
        //handle all possible upgrade versions
 
        if(!$context->getVersion()) {
            //no previous version found, installation, InstallSchema was just executed
            //be careful, since everything below is true for installation !
        }
 
        if (version_compare($context->getVersion(), '1.0.9') < 0) {
            //code to upgrade to 1.0.9
            /* SITE */
            $table = $upgrader->getConnection()
                ->newTable($upgrader->getTable('softwarech_magento2ebay_site'))
                ->addColumn(
                    'site_id',
                    Table::TYPE_SMALLINT,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true],
                    'Site ID'
                )
                ->addColumn('ebay_site_id', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Site ID')
                ->addColumn('name', Table::TYPE_TEXT, 64, ['nullable' => false], 'Name')
                ->addColumn('abbreviation', Table::TYPE_TEXT, 16, ['nullable' => false], 'Abbreviation')
                ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
                ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
                ->setComment('Softwarech Magento2Ebay Site');

            $upgrader->getConnection()->createTable($table);
            
            $upgrader->getConnection()
                ->addForeignKey(
                    $upgrader->getFkName(
                        'softwarech_magento2ebay_profile',
                        'site_id',
                        'softwarech_magento2ebay_site',
                        'site_id'
                    ),
                    $upgrader->getTable('softwarech_magento2ebay_profile'),
                    'site_id',
                    $upgrader->getTable('softwarech_magento2ebay_site'),
                    'site_id',
                    Table::ACTION_SET_NULL,
                    Table::ACTION_SET_NULL
            );
        }
 
        $upgrader->endSetup();
    }
}

