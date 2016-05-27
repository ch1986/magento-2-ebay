<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\OrderItemInterface;
use Magento\Framework\DataObject\IdentityInterface;

class OrderItem extends \Magento\Framework\Model\AbstractModel implements OrderItemInterface, IdentityInterface
{

    /**#@+
     * OrderItem's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_order_item';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_order_item';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_order_item';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\OrderItem');
    }

    /**
     * Prepare order item's statuses.
     * Available event softwarech_magento2ebay_order_item_get_available_statuses to customize statuses.
     *
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ORDER_ITEM_ID);
    }
    
    /**
     * Get order_id
     *
     * @return int|null
     */
    public function getOrderId()
    {
        return $this->getData(self::ORDER_ID);
    }
    
    /**
     * Get product_id
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }
    
    /**
     * Get magento_order_item_id
     *
     * @return int|null
     */
    public function getMagentoOrderItemId()
    {
        return $this->getData(self::MAGENTO_ORDER_ITEM_ID);
    }
	
    /**
     * Get ebay_order_line_item_id
     *
     * @return string
     */
    public function getEbayOrderLineItemId()
    {
        return $this->getData(self::EBAY_ORDER_LINE_ITEM_ID);
    }
    
    /**
     * Get ebay_item_id
     *
     * @return string
     */
    public function getEbayItemId()
    {
        return $this->getData(self::EBAY_ITEM_ID);
    }
    
    /**
     * Get ebay_application_data
     *
     * @return string
     */
    public function getEbayApplicationData()
    {
        return $this->getData(self::EBAY_APPLICATION_DATA);
    }
    
    /**
     * Get ebay_title
     *
     * @return string
     */
    public function getEbayTitle()
    {
        return $this->getData(self::EBAY_TITLE);
    }
    
    /**
     * Get ebay_sku
     *
     * @return string
     */
    public function getEbaySku()
    {
        return $this->getData(self::EBAY_SKU);
    }
    
    /**
     * Get ebay_quantity
     *
     * @return int
     */
    public function getEbayQuantity()
    {
        return $this->getData(self::EBAY_QUANTITY);
    }
    
    /**
     * Get ebay_transaction_id
     *
     * @return string
     */
    public function getEbayTransactionId()
    {
        return $this->getData(self::EBAY_TRANSACTION_ID);
    }
    
    /**
     * Get ebay_transaction_price
     *
     * @return float
     */
    public function getEbayTransactionPrice()
    {
        return $this->getData(self::EBAY_TRANSACTION_PRICE);
    }
    
    /**
     * Get ebay_transaction_currency
     *
     * @return string
     */
    public function getEbayTransactionCurrency()
    {
        return $this->getData(self::EBAY_TRANSACTION_CURRENCY);
    }
    
    /**
     * Get ebay_transaction_site_id
     *
     * @return int
     */
    public function getEbayTransactionSiteId()
    {
        return $this->getData(self::EBAY_TRANSACTION_SITE_ID);
    }
    
    /**
     * Get ebay_shipping_cost
     *
     * @return float
     */
    public function getEbayShippingCost()
    {
        return $this->getData(self::EBAY_SHIPPING_COST);
    }
    
    /**
     * Get ebay_shipping_tracking_number
     *
     * @return string
     */
    public function getEbayShippingTrackingNumber()
    {
        return $this->getData(self::EBAY_SHIPPING_TRACKING_NUMBER);
    }
    
    /**
     * Get ebay_shipping_carrier
     *
     * @return string
     */
    public function getEbayShippingCarrier()
    {
        return $this->getData(self::EBAY_SHIPPING_CARRIER);
    }
    
    /**
     * Get ebay_selling_manager_sales_record_number
     *
     * @return int
     */
    public function getEbaySellingManagerSalesRecordNumber()
    {
        return $this->getData(self::EBAY_SELLING_MANAGER_SALES_RECORD_NUMBER);
    }
    
    /**
     * Get ebay_created_date
     *
     * @return string
     */
    public function getEbayCreatedDate()
    {
        return $this->getData(self::EBAY_CREATED_DATE);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ORDER_ITEM_ID, $id);
    }
    
    /**
     * Set order_id
     *
     * @param int $orderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setOrderId($orderId)
    {
        return $this->setData(self::ORDER_ID, $orderId);
    }
    
    /**
     * Set product_id
     *
     * @param int $productId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setProductId($productId)
    {
        return $this->setData(self::PRODUCT_ID, $productId);
    }
    
    /**
     * Set magento_order_item_id
     *
     * @param int $magentoOrderItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setMagentoOrderItemId($magentoOrderItemId)
    {
        return $this->setData(self::MAGENTO_ORDER_ITEM_ID, $magentoOrderItemId);
    }
	
    /**
     * Set ebay_order_line_item_id
     *
     * @param string $ebayOrderLineItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayOrderLineItemId($ebayOrderLineItemId)
    {
        return $this->setData(self::EBAY_ORDER_LINE_ITEM_ID, $ebayOrderLineItemId);
    }
    
    /**
     * Set ebay_item_id
     *
     * @param string $ebayItemId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayItemId($ebayItemId)
    {
        return $this->setData(self::EBAY_ITEM_ID, $ebayItemId);
    }
    
    /**
     * Set ebay_application_data
     *
     * @param string $ebayApplicationData
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayApplicationData($ebayApplicationData)
    {
        return $this->setData(self::EBAY_APPLICATION_DATA, $ebayApplicationData);
    }
    
    /**
     * Set ebay_title
     *
     * @param string $ebayTitle
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTitle($ebayTitle)
    {
        return $this->setData(self::EBAY_TITLE, $ebayTitle);
    }
    
    /**
     * Set ebay_sku
     *
     * @param string $ebaySku
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbaySku($ebaySku)
    {
        return $this->setData(self::EBAY_SKU, $ebaySku);
    }
    
    /**
     * Set ebay_quantity
     *
     * @param int $ebayQuantity
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayQuantity($ebayQuantity)
    {
        return $this->setData(self::EBAY_QUANTITY, $ebayQuantity);
    }
    
    /**
     * Set ebay_transaction_id
     *
     * @param string $ebayTransactionId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionId($ebayTransactionId)
    {
        return $this->setData(self::EBAY_TRANSACTION_ID, $ebayTransactionId);
    }
    
    /**
     * Set ebay_transaction_price
     *
     * @param float $ebayTransactionPrice
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionPrice($ebayTransactionPrice)
    {
        return $this->setData(self::EBAY_TRANSACTION_PRICE, $ebayTransactionPrice);
    }
    
    /**
     * Set ebay_transaction_currency
     *
     * @param string $ebayTransactionCurrency
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionCurrency($ebayTransactionCurrency)
    {
        return $this->setData(self::EBAY_TRANSACTION_CURRENCY, $ebayTransactionCurrency);
    }
    
    /**
     * Set ebay_transaction_site_id
     *
     * @param int $ebayTransactionSiteId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayTransactionSiteId($ebayTransactionSiteId)
    {
        return $this->setData(self::EBAY_TRANSACTION_SITE_ID, $ebayTransactionSiteId);
    }
    
    /**
     * Set ebay_shipping_cost
     *
     * @param float $ebayShippingCost
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingCost($ebayShippingCost)
    {
        return $this->setData(self::EBAY_SHIPPING_COST, $ebayShippingCost);
    }
    
    /**
     * Set ebay_shipping_tracking_number
     *
     * @param string $ebayShippingTrackingNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingTrackingNumber($ebayShippingTrackingNumber)
    {
        return $this->setData(self::EBAY_SHIPPING_TRACKING_NUMBER, $ebayShippingTrackingNumber);
    }
    
    /**
     * Set ebay_shipping_carrier
     *
     * @param string $ebayShippingCarrier
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayShippingCarrier($ebayShippingCarrier)
    {
        return $this->setData(self::EBAY_SHIPPING_CARRIER, $ebayShippingCarrier);
    }
    
    /**
     * Set ebay_selling_manager_sales_record_number
     *
     * @param int $ebaySellingManagerSalesRecordNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbaySellingManagerSalesRecordNumber($ebaySellingManagerSalesRecordNumber)
    {
        return $this->setData(self::EBAY_SELLING_MANAGER_SALES_RECORD_NUMBER, $ebaySellingManagerSalesRecordNumber);
    }
    
    /**
     * Set ebay_created_date
     *
     * @param string $ebayCreatedDate
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setEbayCreatedDate($ebayCreatedDate)
    {
        return $this->setData(self::EBAY_CREATED_DATE, $ebayCreatedDate);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderItemInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

