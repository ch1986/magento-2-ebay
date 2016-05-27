<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\OrderInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Order extends \Magento\Framework\Model\AbstractModel implements OrderInterface, IdentityInterface
{

    /**#@+
     * Order's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_order';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_order';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_order';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Order');
    }

    /**
     * Prepare order's statuses.
     * Available event softwarech_magento2ebay_order_get_available_statuses to customize statuses.
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
        return $this->getData(self::ORDER_ID);
    }
    
    /**
     * Get magento_order_id
     *
     * @return int|null
     */
    public function getMagentoOrderId()
    {
        return $this->getData(self::MAGENTO_ORDER_ID);
    }
    
    /**
     * Get profile_id
     *
     * @return int|null
     */
    public function getProfileId()
    {
        return $this->getData(self::PROFILE_ID);
    }
	
    /**
     * Get ebay_order_id
     *
     * @return string
     */
    public function getEbayOrderId()
    {
        return $this->getData(self::EBAY_ORDER_ID);
    }
    
    /**
     * Get ebay_created_time
     *
     * @return string
     */
    public function getEbayCreatedTime()
    {
        return $this->getData(self::EBAY_CREATED_TIME);
    }
    
    /**
     * Get ebay_buyer_user_id
     *
     * @return string
     */
    public function getEbayBuyerUserId()
    {
        return $this->getData(self::EBAY_BUYER_USER_ID);
    }
    
    /**
     * Get ebay_buyer_user_firstname
     *
     * @return string
     */
    public function getEbayBuyerUserFirstname()
    {
        return $this->getData(self::EBAY_BUYER_USER_FIRSTNAME);
    }
    
    /**
     * Get ebay_buyer_user_lastname
     *
     * @return string
     */
    public function getEbayBuyerUserLastname()
    {
        return $this->getData(self::EBAY_BUYER_USER_LASTNAME);
    }
    
    /**
     * Get ebay_buyer_email
     *
     * @return string
     */
    public function getEbayBuyerEmail()
    {
        return $this->getData(self::EBAY_BUYER_EMAIL);
    }
    
    /**
     * Get ebay_shipping_service
     *
     * @return string
     */
    public function getEbayShippingService()
    {
        return $this->getData(self::EBAY_SHIPPING_SERVICE);
    }
    
    /**
     * Get ebay_shipping_address_id
     *
     * @return string
     */
    public function getEbayShippingAddressId()
    {
        return $this->getData(self::EBAY_SHIPPING_ADDRESS_ID);
    }
    
    /**
     * Get ebay_shipping_name
     *
     * @return string
     */
    public function getEbayShippingName()
    {
        return $this->getData(self::EBAY_SHIPPING_NAME);
    }
    
    /**
     * Get ebay_shipping_phone
     *
     * @return string
     */
    public function getEbayShippingPhone()
    {
        return $this->getData(self::EBAY_SHIPPING_PHONE);
    }
    
    /**
     * Get ebay_shipping_address_line1
     *
     * @return string
     */
    public function getEbayShippingAddressLine1()
    {
        return $this->getData(self::EBAY_SHIPPING_ADDRESS_LINE1);
    }
    
    /**
     * Get ebay_shipping_address_line2
     *
     * @return string
     */
    public function getEbayShippingAddresLine2()
    {
        return $this->getData(self::EBAY_SHIPPING_ADDRESS_LINE2);
    }
    
    /**
     * Get ebay_shipping_city
     *
     * @return string
     */
    public function getEbayShippingCity()
    {
        return $this->getData(self::EBAY_SHIPPING_CITY);
    }
    
    /**
     * Get ebay_shipping_province
     *
     * @return string
     */
    public function getEbayShippingProvince()
    {
        return $this->getData(self::EBAY_SHIPPING_PROVINCE);
    }
    
    /**
     * Get ebay_shipping_postal_code
     *
     * @return string
     */
    public function getEbayShippingPostalCode()
    {
        return $this->getData(self::EBAY_SHIPPING_POSTAL_CODE);
    }
    
    /**
     * Get ebay_shipping_country
     *
     * @return string
     */
    public function getEbayShippingCountry()
    {
        return $this->getData(self::EBAY_SHIPPING_COUNTRY);
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
     * Get ebay_payment_id
     *
     * @return string
     */
    public function getEbayPaymentId()
    {
        return $this->getData(self::EBAY_PAYMENT_ID);
    }
    
    /**
     * Get ebay_payment_total
     *
     * @return float
     */
    public function getEbayPaymentTotal()
    {
        return $this->getData(self::EBAY_PAYMENT_TOTAL);
    }
    
    /**
     * Get ebay_payment_currency
     *
     * @return string
     */
    public function getEbayPaymentCurrency()
    {
        return $this->getData(self::EBAY_PAYMENT_CURRENCY);
    }
    
    /**
     * Get ebay_order_total_item
     *
     * @return float
     */
    public function getEbayOrderTotalItem()
    {
        return $this->getData(self::EBAY_ORDER_TOTAL_ITEM);
    }
    
    /**
     * Get ebay_order_total_item_tax
     *
     * @return float
     */
    public function getEbayOrderTotalItemTax()
    {
        return $this->getData(self::EBAY_ORDER_TOTAL_ITEM_TAX);
    }
    
    /**
     * Get ebay_order_total_shipping
     *
     * @return float
     */
    public function getEbayOrderTotalShipping()
    {
        return $this->getData(self::EBAY_ORDER_TOTAL_SHIPPING);
    }
    
    /**
     * Get ebay_order_total_discount
     *
     * @return float
     */
    public function getEbayOrderTotalDiscount()
    {
        return $this->getData(self::EBAY_ORDER_TOTAL_DISCOUNT);
    }
    
    /**
     * Get ebay_order_sumtotal
     *
     * @return float
     */
    public function getEbayOrderSumtotal()
    {
        return $this->getData(self::EBAY_ORDER_SUMTOTAL);
    }
    
    /**
     * Get ebay_checkout_payment_status
     *
     * @return string
     */
    public function getEbayCheckoutPaymentStatus()
    {
        return $this->getData(self::EBAY_CHECKOUT_PAYMENT_STATUS);
    }
    
    /**
     * Get ebay_checkout_payment_method
     *
     * @return string
     */
    public function getEbayCheckoutPaymentMethod()
    {
        return $this->getData(self::EBAY_CHECKOUT_PAYMENT_METHOD);
    }
    
    /**
     * Get ebay_checkout_status
     *
     * @return string
     */
    public function getEbayCheckoutStatus()
    {
        return $this->getData(self::EBAY_CHECKOUT_STATUS);
    }
    
    /**
     * Get ebay_checkout_last_modified_time
     *
     * @return string
     */
    public function getEbayCheckoutLastModifiedTime()
    {
        return $this->getData(self::EBAY_CHECKOUT_LAST_MODIFIED_TIME);
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
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ORDER_ID, $id);
    }
    
    /**
     * Set magento_order_id
     *
     * @param int $magentoOrderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setMagentoOrderId($magentoOrderId)
    {
        return $this->setData(self::MAGENTO_ORDER_ID, $magentoOrderId);
    }

    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setProfileId($profileId)
    {
        return $this->setData(self::PROFILE_ID, $profileId);
    }
	
    /**
     * Set ebay_order_id
     *
     * @param string $ebayOrderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderId($ebayOrderId)
    {
        return $this->setData(self::EBAY_ORDER_ID, $ebayOrderId);
    }
    
    /**
     * Set ebay_created_time
     *
     * @param string $ebayCreatedTime
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCreatedTime($ebayCreatedTime)
    {
        return $this->setData(self::EBAY_CREATED_TIME, $ebayCreatedTime);
    }
    
    /**
     * Set ebay_buyer_user_id
     *
     * @param string $ebayBuyerUserId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserId($ebayBuyerUserId)
    {
        return $this->setData(self::EBAY_BUYER_USER_ID, $ebayBuyerUserId);
    }
    
    /**
     * Set ebay_buyer_user_firstname
     *
     * @param string $ebayBuyerUserFirstname
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserFirstname($ebayBuyerUserFirstname)
    {
        return $this->setData(self::EBAY_BUYER_USER_FIRSTNAME, $ebayBuyerUserFirstname);
    }
    
    /**
     * Set ebay_buyer_user_lastname
     *
     * @param string $ebayBuyerUserLastname
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserLastname($ebayBuyerUserLastname)
    {
        return $this->setData(self::EBAY_BUYER_USER_LASTNAME, $ebayBuyerUserLastname);
    }
    
    /**
     * Set ebay_buyer_email
     *
     * @param string $ebayBuyerEmail
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerEmail($ebayBuyerEmail)
    {
        return $this->setData(self::EBAY_BUYER_EMAIL, $ebayBuyerEmail);
    }
    
    /**
     * Set ebay_shipping_service
     *
     * @param string $ebayShippingService
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingService($ebayShippingService)
    {
        return $this->setData(self::EBAY_SHIPPING_SERVICE, $ebayShippingService);
    }
    
    /**
     * Set ebay_shipping_address_id
     *
     * @param string $ebayShippingAddressId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressId($ebayShippingAddressId)
    {
        return $this->setData(self::EBAY_SHIPPING_ADDRESS_ID, $ebayShippingAddressId);
    }
    
    /**
     * Set ebay_shipping_name
     *
     * @param string $ebayShippingName
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingName($ebayShippingName)
    {
        return $this->setData(self::EBAY_SHIPPING_NAME, $ebayShippingName);
    }
    
    /**
     * Set ebay_shipping_phone
     *
     * @param string $ebayShippingPhone
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingPhone($ebayShippingPhone)
    {
        return $this->setData(self::EBAY_SHIPPING_PHONE, $ebayShippingPhone);
    }
    
    /**
     * Set ebay_shipping_address_line1
     *
     * @param string $ebayShippingAddressLine1
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressLine1($ebayShippingAddressLine1)
    {
        return $this->setData(self::EBAY_SHIPPING_ADDRESS_LINE1, $ebayShippingAddressLine1);
    }
    
    /**
     * Set ebay_shipping_address_line2
     *
     * @param string $ebayShippingAddressLine2
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressLine2($ebayShippingAddressLine2)
    {
        return $this->setData(self::EBAY_SHIPPING_ADDRESS_LINE2, $ebayShippingAddressLine2);
    }
    
    /**
     * Set ebay_shipping_city
     *
     * @param string $ebayShippingCity
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCity($ebayShippingCity)
    {
        return $this->setData(self::EBAY_SHIPPING_CITY, $ebayShippingCity);
    }
    
    /**
     * Set ebay_shipping_province
     *
     * @param string $ebayShippingProvince
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingProvince($ebayShippingProvince)
    {
        return $this->setData(self::EBAY_SHIPPING_PROVINCE, $ebayShippingProvince);
    }
    
    /**
     * Set ebay_shipping_postal_code
     *
     * @param string $ebayShippingPostalCode
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingPostalCode($ebayShippingPostalCode)
    {
        return $this->setData(self::EBAY_SHIPPING_POSTAL_CODE, $ebayShippingPostalCode);
    }
    
    /**
     * Set ebay_shipping_country
     *
     * @param string $ebayShippingCountry
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCountry($ebayShippingCountry)
    {
        return $this->setData(self::EBAY_SHIPPING_COUNTRY, $ebayShippingCountry);
    }
    
    /**
     * Set ebay_shipping_tracking_number
     *
     * @param string $ebayShippingTrackingNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingTrackingNumber($ebayShippingTrackingNumber)
    {
        return $this->setData(self::EBAY_SHIPPING_TRACKING_NUMBER, $ebayShippingTrackingNumber);
    }
    
    /**
     * Set ebay_shipping_carrier
     *
     * @param string $ebayShippingCarrier
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCarrier($ebayShippingCarrier)
    {
        return $this->setData(self::EBAY_SHIPPING_CARRIER, $ebayShippingCarrier);
    }
    
    /**
     * Set ebay_payment_id
     *
     * @param string $ebayPaymentId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentId($ebayPaymentId)
    {
        return $this->setData(self::EBAY_PAYMENT_ID, $ebayPaymentId);
    }
    
    /**
     * Set ebay_payment_total
     *
     * @param float $ebayPaymentTotal
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentTotal($ebayPaymentTotal)
    {
        return $this->setData(self::EBAY_PAYMENT_TOTAL, $ebayPaymentTotal);
    }
    
    /**
     * Set ebay_payment_currency
     *
     * @param string $ebayPaymentCurrency
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentCurrency($ebayPaymentCurrency)
    {
        return $this->setData(self::EBAY_PAYMENT_CURRENCY, $ebayPaymentCurrency);
    }
    
    /**
     * Set ebay_order_total_item
     *
     * @param float $ebayOrderTotalItem
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalItem($ebayOrderTotalItem)
    {
        return $this->setData(self::EBAY_ORDER_TOTAL_ITEM, $ebayOrderTotalItem);
    }
    
    /**
     * Set ebay_order_total_item_tax
     *
     * @param float $ebayOrderTotalItemTax
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalItemTax($ebayOrderTotalItemTax)
    {
        return $this->setData(self::EBAY_ORDER_TOTAL_ITEM_TAX, $ebayOrderTotalItemTax);
    }
    
    /**
     * Set ebay_order_total_shipping
     *
     * @param float $ebayOrderTotalShipping
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalShipping($ebayOrderTotalShipping)
    {
        return $this->setData(self::EBAY_ORDER_TOTAL_SHIPPING, $ebayOrderTotalShipping);
    }
    
    /**
     * Set ebay_order_total_discount
     *
     * @param float $ebayOrderTotalDiscount
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalDiscount($ebayOrderTotalDiscount)
    {
        return $this->setData(self::EBAY_ORDER_TOTAL_DISCOUNT, $ebayOrderTotalDiscount);
    }
    
    /**
     * Set ebay_order_sumtotal
     *
     * @param float $ebayOrderSumtotal
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderSumtotal($ebayOrderSumtotal)
    {
        return $this->setData(self::EBAY_ORDER_SUMTOTAL, $ebayOrderSumtotal);
    }
    
    /**
     * Set ebay_checkout_payment_status
     *
     * @param string $ebayCheckoutPaymentStatus
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutPaymentStatus($ebayCheckoutPaymentStatus)
    {
        return $this->setData(self::EBAY_CHECKOUT_PAYMENT_STATUS, $ebayCheckoutPaymentStatus);
    }
    
    /**
     * Set ebay_checkout_payment_method
     *
     * @param string $ebayCheckoutPaymentMethod
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutPaymentMethod($ebayCheckoutPaymentMethod)
    {
        return $this->setData(self::EBAY_CHECKOUT_PAYMENT_METHOD, $ebayCheckoutPaymentMethod);
    }
    
    /**
     * Set ebay_checkout_status
     *
     * @param string $ebayCheckoutStatus
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutStatus($ebayCheckoutStatus)
    {
        return $this->setData(self::EBAY_CHECKOUT_STATUS, $ebayCheckoutStatus);
    }
    
    /**
     * Set ebay_checkout_last_modified_time
     *
     * @param string $ebayCheckoutLastModifiedTime
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutLastModifiedTime($ebayCheckoutLastModifiedTime)
    {
        return $this->setData(self::EBAY_CHECKOUT_LAST_MODIFIED_TIME, $ebayCheckoutLastModifiedTime);
    }
    
    /**
     * Set ebay_selling_manager_sales_record_number
     *
     * @param int $ebaySellingManagerSalesRecordNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbaySellingManagerSalesRecordNumber($ebaySellingManagerSalesRecordNumber)
    {
        return $this->setData(self::EBAY_SELLING_MANAGER_SALES_RECORD_NUMBER, $ebaySellingManagerSalesRecordNumber);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

