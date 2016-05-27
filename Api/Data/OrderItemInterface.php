<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface OrderItemInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ORDER_ITEM_ID                             = 'order_item_id';
    const ORDER_ID                                  = 'order_id';
    const PRODUCT_ID                                = 'product_id';
    const MAGENTO_ORDER_ITEM_ID                     = 'magento_order_item_id';
    const EBAY_ORDER_LINE_ITEM_ID                   = 'ebay_order_line_item_id';
    const EBAY_ITEM_ID                              = 'ebay_item_id';
    const EBAY_APPLICATION_DATA                     = 'ebay_application_data';
    const EBAY_TITLE                                = 'ebay_title';
    const EBAY_SKU                                  = 'ebay_sku';
    const EBAY_QUANTITY                             = 'ebay_quantity';
    const EBAY_TRANSACTION_ID                       = 'ebay_transaction_id';
    const EBAY_TRANSACTION_PRICE                    = 'ebay_transaction_price';
    const EBAY_TRANSACTION_CURRENCY                 = 'ebay_transaction_currency';
    const EBAY_TRANSACTION_SITE_ID                  = 'ebay_transaction_site_id';
    const EBAY_SHIPPING_COST                        = 'ebay_shipping_cost';
    const EBAY_SHIPPING_TRACKING_NUMBER             = 'ebay_shipping_tracking_number';
    const EBAY_SHIPPING_CARRIER                     = 'ebay_shipping_carrier';
    const EBAY_SELLING_MANAGER_SALES_RECORD_NUMBER  = 'ebay_selling_manager_sales_record_number';
    const EBAY_CREATED_DATE                         = 'ebay_created_date';
    const CREATION_TIME                             = 'creation_time';
    const UPDATE_TIME                               = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get order_id
     *
     * @return int|null
     */
    public function getOrderId();
    
    /**
     * Get product_id
     *
     * @return int|null
     */
    public function getProductId();
    
    /**
     * Get magento_order_item_id
     *
     * @return int|null
     */
    public function getMagentoOrderItemId();
	
    /**
     * Get ebay_order_line_item_id
     *
     * @return string
     */
    public function getEbayOrderLineItemId();
    
    /**
     * Get ebay_item_id
     *
     * @return string
     */
    public function getEbayItemId();
    
    /**
     * Get ebay_application_data
     *
     * @return string
     */
    public function getEbayApplicationData();
    
    /**
     * Get ebay_title
     *
     * @return string
     */
    public function getEbayTitle();
    
    /**
     * Get ebay_sku
     *
     * @return string
     */
    public function getEbaySku();
    
    /**
     * Get ebay_quantity
     *
     * @return int
     */
    public function getEbayQuantity();
    
    /**
     * Get ebay_transaction_id
     *
     * @return string
     */
    public function getEbayTransactionId();
    
    /**
     * Get ebay_transaction_price
     *
     * @return float
     */
    public function getEbayTransactionPrice();
    
    /**
     * Get ebay_transaction_currency
     *
     * @return string
     */
    public function getEbayTransactionCurrency();
    
    /**
     * Get ebay_transaction_site_id
     *
     * @return int
     */
    public function getEbayTransactionSiteId();
    
    /**
     * Get ebay_shipping_cost
     *
     * @return float
     */
    public function getEbayShippingCost();
    
    /**
     * Get ebay_shipping_tracking_number
     *
     * @return string
     */
    public function getEbayShippingTrackingNumber();
    
    /**
     * Get ebay_shipping_carrier
     *
     * @return string
     */
    public function getEbayShippingCarrier();
    
    /**
     * Get ebay_selling_manager_sales_record_number
     *
     * @return int
     */
    public function getEbaySellingManagerSalesRecordNumber();
    
    /**
     * Get ebay_created_date
     *
     * @return string
     */
    public function getEbayCreatedDate();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Set ID
     *
     * @param int $id
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setId($id);

    /**
     * Set order_id
     *
     * @param int $orderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setOrderId($orderId);
    
    /**
     * Set product_id
     *
     * @param int $productId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setProductId($productId);
    
    /**
     * Set magento_order_item_id
     *
     * @param int $magentoOrderItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setMagentoOrderItemId($magentoOrderItemId);
	
    /**
     * Set ebay_order_line_item_id
     *
     * @param string $ebayOrderLineItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayOrderLineItemId($ebayOrderLineItemId);
    
    /**
     * Set ebay_item_id
     *
     * @param string $ebayItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayItemId($ebayItemId);
    
    /**
     * Set ebay_application_data
     *
     * @param string $ebayApplicationData
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayApplicationData($ebayApplicationData);
    
    /**
     * Set ebay_title
     *
     * @param string $ebayTitle
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTitle($ebayTitle);
    
    /**
     * Set ebay_sku
     *
     * @param string $ebaySku
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbaySku($ebaySku);
    
    /**
     * Set ebay_quantity
     *
     * @param int $ebayQuantity
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayQuantity($ebayQuantity);
    
    /**
     * Set ebay_transaction_id
     *
     * @param string $ebayTransactionId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionId($ebayTransactionId);
    
    /**
     * Set ebay_transaction_price
     *
     * @param float $ebayTransactionPrice
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionPrice($ebayTransactionPrice);
    
    /**
     * Set ebay_transaction_currency
     *
     * @param string $ebayTransactionCurrency
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionCurrency($ebayTransactionCurrency);
    
    /**
     * Set ebay_transaction_site_id
     *
     * @param int $ebayTransactionSiteId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionSiteId($ebayTransactionSiteId);
    
    /**
     * Set ebay_shipping_cost
     *
     * @param float $ebayShippingCost
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingCost($ebayShippingCost);
    
    /**
     * Set ebay_shipping_tracking_number
     *
     * @param string $ebayShippingTrackingNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingTrackingNumber($ebayShippingTrackingNumber);
    
    /**
     * Set ebay_shipping_carrier
     *
     * @param string $ebayShippingCarrier
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingCarrier($ebayShippingCarrier);
    
    /**
     * Set ebay_selling_manager_sales_record_number
     *
     * @param int $ebaySellingManagerSalesRecordNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbaySellingManagerSalesRecordNumber($ebaySellingManagerSalesRecordNumber);
    
    /**
     * Set ebay_created_date
     *
     * @param string $ebayCreatedDate
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayCreatedDate($ebayCreatedDate);
    
    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setUpdateTime($update_time);

}

