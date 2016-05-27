<?php 

namespace Softwarech\Magento2Ebay\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /* PROFILE */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_profile'))
            ->addColumn(
                'profile_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Profile ID'
            )
            ->addColumn('site_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Site ID')
            ->addColumn('location_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Location ID')
            ->addColumn('username', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null])
            ->addColumn('currency', Table::TYPE_TEXT, 4, ['nullable' => false], 'Currency')
            ->addColumn('ebay_auth_token', Table::TYPE_TEXT, 2048, ['nullable' => true, 'default' => null], 'eBay Auth Token')
            ->addColumn('ebay_environment', Table::TYPE_TEXT, 16, ['nullable' => true, 'default' => null], 'eBay Environment')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_profile',
                    'location_id',
                    'softwarech_magento2ebay_location',
                    'location_id'
                ),
                'location_id',
                $installer->getTable('softwarech_magento2ebay_location'),
                'location_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_profile',
                    'site_id',
                    'softwarech_magento2ebay_site',
                    'site_id'
                ),
                'site_id',
                $installer->getTable('softwarech_magento2ebay_site'),
                'site_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Profile');

        $installer->getConnection()->createTable($table);
        
        /* LOCATION */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_location'))
            ->addColumn(
                'location_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Location ID'
            )
            ->addColumn('country', Table::TYPE_TEXT, 2, ['nullable' => false], 'Country')
            ->addColumn('location', Table::TYPE_TEXT, 64, ['nullable' => false], 'Location')
            ->addColumn('postal_code', Table::TYPE_TEXT, 32, ['nullable' => false], 'Postal Code')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->setComment('Softwarech Magento2Ebay Location');

        $installer->getConnection()->createTable($table);
        
        /* SITE */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_site'))
            ->addColumn(
                'site_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Site ID'
            )
            ->addColumn('ebay_site_id', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Site ID')
            ->addColumn('name', Table::TYPE_TEXT, 64, ['nullable' => false], 'Name')
            ->addColumn('abbreviation', Table::TYPE_TEXT, 16, ['nullable' => false], 'Abbreviation')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->setComment('Softwarech Magento2Ebay Site');
        
        $installer->getConnection()->createTable($table);
        
        /* PAYMENT POLICY */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_payment_policy'))
            ->addColumn(
                'payment_policy_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Payment Policy ID'
            )
            ->addColumn('site_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Site ID')
            ->addColumn('ebay_payment_policy_id', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Payment Policy ID')
            ->addColumn('name', Table::TYPE_TEXT, 64, ['nullable' => false], 'Name')
            ->addColumn('description', Table::TYPE_TEXT, 64, ['nullable' => false], 'Description')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_payment_policy',
                    'site_id',
                    'softwarech_magento2ebay_site',
                    'site_id'
                ),
                'site_id',
                $installer->getTable('softwarech_magento2ebay_site'),
                'site_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Payment Policy');
        
        $installer->getConnection()->createTable($table);
        
        /* RETURN POLICY */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_return_policy'))
            ->addColumn(
                'return_policy_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Return Policy ID'
            )
            ->addColumn('site_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Site ID')
            ->addColumn('ebay_return_policy_id', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Payment Policy ID')
            ->addColumn('name', Table::TYPE_TEXT, 64, ['nullable' => false], 'Name')
            ->addColumn('description', Table::TYPE_TEXT, 64, ['nullable' => false], 'Description')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_return_policy',
                    'site_id',
                    'softwarech_magento2ebay_site',
                    'site_id'
                ),
                'site_id',
                $installer->getTable('softwarech_magento2ebay_site'),
                'site_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Return Policy');
        
        $installer->getConnection()->createTable($table);
        
        /* SHIPPING POLICY */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_shipping_policy'))
            ->addColumn(
                'shipping_policy_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Shipping Policy ID'
            )
            ->addColumn('site_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Site ID')
            ->addColumn('ebay_shipping_policy_id', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Shipping Policy ID')
            ->addColumn('name', Table::TYPE_TEXT, 64, ['nullable' => false], 'Name')
            ->addColumn('description', Table::TYPE_TEXT, 64, ['nullable' => false], 'Description')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_shipping_policy',
                    'site_id',
                    'softwarech_magento2ebay_site',
                    'site_id'
                ),
                'site_id',
                $installer->getTable('softwarech_magento2ebay_site'),
                'site_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Shipping Policy');
        
        $installer->getConnection()->createTable($table);
        
        /* CATEGORY */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_category'))
            ->addColumn(
                'category_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Category ID'
            )
            ->addColumn('magento_category_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Magento Category ID')
            ->addColumn('profile_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Profile ID')
            ->addColumn('ebay_category_id', Table::TYPE_SMALLINT, null, ['nullable' => true, 'default' => null], 'eBay Category ID')
            ->addColumn('ebay_store_category_id', Table::TYPE_SMALLINT, null, ['nullable' => true, 'default' => null], 'eBay Store Category ID')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_category',
                    'magento_category_id',
                    'catalog_category_entity',
                    'entity_id'
                ),
                'magento_category_id',
                $installer->getTable('catalog_category_entity'),
                'entity_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_category',
                    'profile_id',
                    'softwarech_magento2ebay_profile',
                    'profile_id'
                ),
                'profile_id',
                $installer->getTable('softwarech_magento2ebay_profile'),
                'profile_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Category');
        
        $installer->getConnection()->createTable($table);
        
        /* PRODUCT MAPPING */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_product_mapping'))
            ->addColumn(
                'mapping_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Mapping ID'
            )
            ->addColumn('profile_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Profile ID')
            ->addColumn('description', Table::TYPE_TEXT, 128, ['nullable' => false], 'Description')
            ->addColumn('title', Table::TYPE_TEXT, 128, ['nullable' => false], 'Title')
            ->addColumn('sku', Table::TYPE_TEXT, 128, ['nullable' => false], 'SKU')
            ->addColumn('ean', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'EAN')
            ->addColumn('brand', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'Brand')
            ->addColumn('mpn', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'MPN')
            ->addColumn('image', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'Image')
            ->addColumn('price', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'Price')
            ->addColumn('stp', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'STP')
            ->addColumn('stock', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'Stock')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_product_mapping',
                    'profile_id',
                    'softwarech_magento2ebay_profile',
                    'profile_id'
                ),
                'profile_id',
                $installer->getTable('softwarech_magento2ebay_profile'),
                'profile_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Product Mapping');
        
        $installer->getConnection()->createTable($table);
        
        /* PRODUCT */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_product'))
            ->addColumn(
                'product_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Product ID'
            )
            ->addColumn('magento_product_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Magento Product ID')
            ->addColumn('profile_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Profile ID')
            ->addColumn('ebay_item_id', Table::TYPE_TEXT, 38, ['nullable' => true, 'default' => null], 'eBay Item ID')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_product',
                    'magento_product_id',
                    'catalog_product_entity',
                    'entity_id'
                ),
                'magento_product_id',
                $installer->getTable('catalog_product_entity'),
                'entity_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_product',
                    'profile_id',
                    'softwarech_magento2ebay_profile',
                    'profile_id'
                ),
                'profile_id',
                $installer->getTable('softwarech_magento2ebay_profile'),
                'profile_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Category');
        
        $installer->getConnection()->createTable($table);
        
        /* ORDER */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_order'))
            ->addColumn(
                'order_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Order ID'
            )
            ->addColumn('magento_order_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Magento Order ID')
            ->addColumn('profile_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Profile ID')
            ->addColumn('ebay_order_id', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Order ID')
            ->addColumn('ebay_created_time', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Created Time')
            ->addColumn('ebay_buyer_user_id', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Buyer User ID')
            ->addColumn('ebay_buyer_user_firstname', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Buyer User Firstname')
            ->addColumn('ebay_buyer_user_lastname', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Buyer User Lastname')
            ->addColumn('ebay_buyer_email', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Buyer Email')
            ->addColumn('ebay_shipping_service', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Shipping Service')
            ->addColumn('ebay_shipping_address_id', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Shipping Address ID')
            ->addColumn('ebay_shipping_name', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Shipping Name')
            ->addColumn('ebay_shipping_phone', Table::TYPE_TEXT, 32, ['nullable' => true, 'default' => null], 'eBay Shipping Phone')
            ->addColumn('ebay_shipping_address_line1', Table::TYPE_TEXT, 512, ['nullable' => true, 'default' => null], 'eBay Shipping Address Line 1')
            ->addColumn('ebay_shipping_address_line2', Table::TYPE_TEXT, 512, ['nullable' => true, 'default' => null], 'eBay Shipping Address Line 2')
            ->addColumn('ebay_shipping_city', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Shipping City')
            ->addColumn('ebay_shipping_province', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Shipping Province')
            ->addColumn('ebay_shipping_postal_code', Table::TYPE_TEXT, 24, ['nullable' => true, 'default' => null], 'eBay Shipping Postal Code')
            ->addColumn('ebay_shipping_country', Table::TYPE_TEXT, 2, ['nullable' => true, 'default' => null], 'eBay Shipping Country')
            ->addColumn('ebay_shipping_tracking_number', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Shipping Tracking Number')
            ->addColumn('ebay_shipping_carrier', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Shipping Carrier')
            ->addColumn('ebay_payment_id', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Payment ID')
            ->addColumn('ebay_payment_total', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Payment Total')
            ->addColumn('ebay_payment_currency', Table::TYPE_TEXT, 3, ['nullable' => true, 'default' => null], 'eBay Payment Currency')
            ->addColumn('ebay_order_total_item', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Order Total Item')
            ->addColumn('ebay_order_total_item_tax', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Order Total Item Tax')
            ->addColumn('ebay_order_total_shipping', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Order Total Shipping')
            ->addColumn('ebay_order_total_discount', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Order Total Discount')
            ->addColumn('ebay_order_sumtotal', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Order Sumtotal')
            ->addColumn('ebay_checkout_payment_status', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Checkout Payment Status')
            ->addColumn('ebay_checkout_payment_method', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Checkout Payment Method')
            ->addColumn('ebay_checkout_status', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Checkout Status')
            ->addColumn('ebay_checkout_last_modified_time', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Checkout Last Modified Time')
            ->addColumn('ebay_selling_manager_sales_record_number', Table::TYPE_SMALLINT, null, ['nullable' => true, 'default' => null], 'eBay Selling Manager Sales Record Number')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_order',
                    'magento_order_id',
                    'sales_order',
                    'entity_id'
                ),
                'magento_order_id',
                $installer->getTable('sales_order'),
                'entity_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_order',
                    'profile_id',
                    'softwarech_magento2ebay_profile',
                    'profile_id'
                ),
                'profile_id',
                $installer->getTable('softwarech_magento2ebay_profile'),
                'profile_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Order');
        
        $installer->getConnection()->createTable($table);
        
        /* ORDER ITEM */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('softwarech_magento2ebay_order_item'))
            ->addColumn(
                'order_item_id',
                Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Order Item ID'
            )
            ->addColumn('order_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Order ID')
            ->addColumn('product_id', Table::TYPE_SMALLINT, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Product ID')
            ->addColumn('magento_order_item_id', Table::TYPE_INTEGER, null, ['unsigned' => true, 'nullable' => true, 'default' => null], 'Magento Order ID')
            ->addColumn('ebay_order_line_item_id', Table::TYPE_TEXT, 50, ['nullable' => true, 'default' => null], 'eBay Order Line Item ID')
            ->addColumn('ebay_item_id', Table::TYPE_TEXT, 38, ['nullable' => true, 'default' => null], 'eBay Item ID')
            ->addColumn('ebay_application_data', Table::TYPE_TEXT, 128, ['nullable' => true, 'default' => null], 'eBay Application Data')
            ->addColumn('ebay_title', Table::TYPE_TEXT, 128, ['nullable' => false], 'eBay Title')
            ->addColumn('ebay_sku', Table::TYPE_TEXT, 128, ['nullable' => false], 'eBay SKU')
            ->addColumn('ebay_quantity', Table::TYPE_SMALLINT, null, ['nullable' => false], 'eBay Quantity')
            ->addColumn('ebay_transaction_id', Table::TYPE_TEXT, 38, ['nullable' => true, 'default' => null], 'eBay Transaction ID')
            ->addColumn('ebay_transaction_price', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Transaction Price')
            ->addColumn('ebay_transaction_currency', Table::TYPE_TEXT, 3, ['nullable' => true, 'default' => null], 'eBay Transaction Currency')
            ->addColumn('ebay_transaction_site_id', Table::TYPE_SMALLINT, null, ['nullable' => true, 'default' => null], 'eBay Transaction Site ID')
            ->addColumn('ebay_shipping_cost', Table::TYPE_FLOAT, null, ['nullable' => true, 'default' => null], 'eBay Shipping Cost')
            ->addColumn('ebay_shipping_tracking_number', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Shipping Tracking Number')
            ->addColumn('ebay_shipping_carrier', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Shipping Carrier')
            ->addColumn('ebay_selling_manager_sales_record_number', Table::TYPE_SMALLINT, null, ['nullable' => true, 'default' => null], 'eBay Selling Manager Sales Record Number')
            ->addColumn('ebay_created_date', Table::TYPE_TEXT, 64, ['nullable' => true, 'default' => null], 'eBay Created Date')
            ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
            ->addColumn('update_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Update Time')
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_order_item',
                    'magento_order_item_id',
                    'sales_order_item',
                    'item_id'
                ),
                'magento_order_item_id',
                $installer->getTable('sales_order_item'),
                'item_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_order_item',
                    'order_id',
                    'softwarech_magento2ebay_order',
                    'order_id'
                ),
                'order_id',
                $installer->getTable('softwarech_magento2ebay_order'),
                'order_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->addForeignKey(
                $installer->getFkName(
                    'softwarech_magento2ebay_order_item',
                    'product_id',
                    'softwarech_magento2ebay_product',
                    'product_id'
                ),
                'product_id',
                $installer->getTable('softwarech_magento2ebay_product'),
                'product_id',
                Table::ACTION_SET_NULL,
                Table::ACTION_SET_NULL
            )
            ->setComment('Softwarech Magento2Ebay Order Item');
        
        $installer->getConnection()->createTable($table);
            
        $installer->endSetup();
    }

}

