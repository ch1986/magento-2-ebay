<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface OrderInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ORDER_ID                                  = 'order_id';
    const MAGENTO_ORDER_ID                          = 'magento_order_id';
    const PROFILE_ID                                = 'profile_id';
    const EBAY_ORDER_ID                             = 'ebay_order_id';
    const EBAY_CREATED_TIME                         = 'ebay_created_time';
    const EBAY_BUYER_USER_ID                        = 'ebay_buyer_user_id';
    const EBAY_BUYER_USER_FIRSTNAME                 = 'ebay_buyer_user_firstname';
    const EBAY_BUYER_USER_LASTNAME                  = 'ebay_buyer_user_lastname';
    const EBAY_BUYER_EMAIL                          = 'ebay_buyer_email';
    const EBAY_SHIPPING_SERVICE                     = 'ebay_shipping_service';
    const EBAY_SHIPPING_ADDRESS_ID                  = 'ebay_shipping_address_id';
    const EBAY_SHIPPING_NAME                        = 'ebay_shipping_name';
    const EBAY_SHIPPING_PHONE                       = 'ebay_shipping_phone';
    const EBAY_SHIPPING_ADDRESS_LINE1               = 'ebay_shipping_address_line2';
    const EBAY_SHIPPING_ADDRESS_LINE2               = 'ebay_shipping_address_line2';
    const EBAY_SHIPPING_CITY                        = 'ebay_shipping_city';
    const EBAY_SHIPPING_PROVINCE                    = 'ebay_shipping_province';
    const EBAY_SHIPPING_POSTAL_CODE                 = 'ebay_shipping_postal_code';
    const EBAY_SHIPPING_COUNTRY                     = 'ebay_shipping_country';
    const EBAY_SHIPPING_TRACKING_NUMBER             = 'ebay_shipping_tracking_number';
    const EBAY_SHIPPING_CARRIER                     = 'ebay_shipping_carrier';
    const EBAY_PAYMENT_ID                           = 'ebay_payment_id';
    const EBAY_PAYMENT_TOTAL                        = 'ebay_payment_total';
    const EBAY_PAYMENT_CURRENCY                     = 'ebay_payment_currency';
    const EBAY_ORDER_TOTAL_ITEM                     = 'ebay_order_total_item';
    const EBAY_ORDER_TOTAL_ITEM_TAX                 = 'ebay_order_total_item_tax';
    const EBAY_ORDER_TOTAL_SHIPPING                 = 'ebay_order_total_shipping';
    const EBAY_ORDER_TOTAL_DISCOUNT                 = 'ebay_order_total_discount';
    const EBAY_ORDER_SUMTOTAL                       = 'ebay_order_sumtotal';
    const EBAY_CHECKOUT_PAYMENT_STATUS              = 'ebay_checkout_payment_status';
    const EBAY_CHECKOUT_PAYMENT_METHOD              = 'ebay_checkout_payment_method';
    const EBAY_CHECKOUT_STATUS                      = 'ebay_checkout_status';
    const EBAY_CHECKOUT_LAST_MODIFIED_TIME          = 'ebay_checkout_last_modified_time';
    const EBAY_SELLING_MANAGER_SALES_RECORD_NUMBER  = 'ebay_selling_manager_sales_record_number';
    const CREATION_TIME                             = 'creation_time';
    const UPDATE_TIME                               = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get magento_order_id
     *
     * @return int|null
     */
    public function getMagentoOrderId();
    
    /**
     * Get profile_id
     *
     * @return int|null
     */
    public function getProfileId();
	
    /**
     * Get ebay_order_id
     *
     * @return string
     */
    public function getEbayOrderId();
    
    /**
     * Get ebay_created_time
     *
     * @return string
     */
    public function getEbayCreatedTime();
    
    /**
     * Get ebay_buyer_user_id
     *
     * @return string
     */
    public function getEbayBuyerUserId();
    
    /**
     * Get ebay_buyer_user_firstname
     *
     * @return string
     */
    public function getEbayBuyerUserFirstname();
    
    /**
     * Get ebay_buyer_user_lastname
     *
     * @return string
     */
    public function getEbayBuyerUserLastname();
    
    /**
     * Get ebay_buyer_email
     *
     * @return string
     */
    public function getEbayBuyerEmail();
    
    /**
     * Get ebay_shipping_service
     *
     * @return string
     */
    public function getEbayShippingService();
    
    /**
     * Get ebay_shipping_address_id
     *
     * @return string
     */
    public function getEbayShippingAddressId();
    
    /**
     * Get ebay_shipping_name
     *
     * @return string
     */
    public function getEbayShippingName();
    
    /**
     * Get ebay_shipping_phone
     *
     * @return string
     */
    public function getEbayShippingPhone();
    
    /**
     * Get ebay_shipping_address_line1
     *
     * @return string
     */
    public function getEbayShippingAddressLine1();
    
    /**
     * Get ebay_shipping_address_line2
     *
     * @return string
     */
    public function getEbayShippingAddresLine2();
    
    /**
     * Get ebay_shipping_city
     *
     * @return string
     */
    public function getEbayShippingCity();
    
    /**
     * Get ebay_shipping_province
     *
     * @return string
     */
    public function getEbayShippingProvince();
    
    /**
     * Get ebay_shipping_postal_code
     *
     * @return string
     */
    public function getEbayShippingPostalCode();
    
    /**
     * Get ebay_shipping_country
     *
     * @return string
     */
    public function getEbayShippingCountry();
    
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
     * Get ebay_payment_id
     *
     * @return string
     */
    public function getEbayPaymentId();
    
    /**
     * Get ebay_payment_total
     *
     * @return float
     */
    public function getEbayPaymentTotal();
    
    /**
     * Get ebay_payment_currency
     *
     * @return string
     */
    public function getEbayPaymentCurrency();
    
    /**
     * Get ebay_order_total_item
     *
     * @return float
     */
    public function getEbayOrderTotalItem();
    
    /**
     * Get ebay_order_total_item_tax
     *
     * @return float
     */
    public function getEbayOrderTotalItemTax();
    
    /**
     * Get ebay_order_total_shipping
     *
     * @return float
     */
    public function getEbayOrderTotalShipping();
    
    /**
     * Get ebay_order_total_discount
     *
     * @return float
     */
    public function getEbayOrderTotalDiscount();
    
    /**
     * Get ebay_order_sumtotal
     *
     * @return float
     */
    public function getEbayOrderSumtotal();
    
    /**
     * Get ebay_checkout_payment_status
     *
     * @return string
     */
    public function getEbayCheckoutPaymentStatus();
    
    /**
     * Get ebay_checkout_payment_method
     *
     * @return string
     */
    public function getEbayCheckoutPaymentMethod();
    
    /**
     * Get ebay_checkout_status
     *
     * @return string
     */
    public function getEbayCheckoutStatus();
    
    /**
     * Get ebay_checkout_last_modified_time
     *
     * @return string
     */
    public function getEbayCheckoutLastModifiedTime();
    
    /**
     * Get ebay_selling_manager_sales_record_number
     *
     * @return int
     */
    public function getEbaySellingManagerSalesRecordNumber();

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
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setId($id);
    
    /**
     * Set magento_order_id
     *
     * @param int $magentoOrderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setMagentoOrderId($magentoOrderId);

    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setProfileId($profileId);
	
    /**
     * Set ebay_order_id
     *
     * @param string $ebayOrderId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderId($ebayOrderId);
    
    /**
     * Set ebay_created_time
     *
     * @param string $ebayCreatedTime
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCreatedTime($ebayCreatedTime);
    
    /**
     * Set ebay_buyer_user_id
     *
     * @param string $ebayBuyerUserId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserId($ebayBuyerUserId);
    
    /**
     * Set ebay_buyer_user_firstname
     *
     * @param string $ebayBuyerUserFirstname
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserFirstname($ebayBuyerUserFirstname);
    
    /**
     * Set ebay_buyer_user_lastname
     *
     * @param string $ebayBuyerUserLastname
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerUserLastname($ebayBuyerUserLastname);
    
    /**
     * Set ebay_buyer_email
     *
     * @param string $ebayBuyerEmail
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayBuyerEmail($ebayBuyerEmail);
    
    /**
     * Set ebay_shipping_service
     *
     * @param string $ebayShippingService
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingService($ebayShippingService);
    
    /**
     * Set ebay_shipping_address_id
     *
     * @param string $ebayShippingAddressId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressId($ebayShippingAddressId);
    
    /**
     * Set ebay_shipping_name
     *
     * @param string $ebayShippingName
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingName($ebayShippingName);
    
    /**
     * Set ebay_shipping_phone
     *
     * @param string $ebayShippingPhone
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingPhone($ebayShippingPhone);
    
    /**
     * Set ebay_shipping_address_line1
     *
     * @param string $ebayShippingAddressLine1
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressLine1($ebayShippingAddressLine1);
    
    /**
     * Set ebay_shipping_address_line2
     *
     * @param string $ebayShippingAddressLine2
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingAddressLine2($ebayShippingAddressLine2);
    
    /**
     * Set ebay_shipping_city
     *
     * @param string $ebayShippingCity
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCity($ebayShippingCity);
    
    /**
     * Set ebay_shipping_province
     *
     * @param string $ebayShippingProvince
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingProvince($ebayShippingProvince);
    
    /**
     * Set ebay_shipping_postal_code
     *
     * @param string $ebayShippingPostalCode
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingPostalCode($ebayShippingPostalCode);
    
    /**
     * Set ebay_shipping_country
     *
     * @param string $ebayShippingCountry
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCountry($ebayShippingCountry);
    
    /**
     * Set ebay_shipping_tracking_number
     *
     * @param string $ebayShippingTrackingNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingTrackingNumber($ebayShippingTrackingNumber);
    
    /**
     * Set ebay_shipping_carrier
     *
     * @param string $ebayShippingCarrier
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayShippingCarrier($ebayShippingCarrier);
    
    /**
     * Set ebay_payment_id
     *
     * @param string $ebayPaymentId
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentId($ebayPaymentId);
    
    /**
     * Set ebay_payment_total
     *
     * @param float $ebayPaymentTotal
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentTotal($ebayPaymentTotal);
    
    /**
     * Set ebay_payment_currency
     *
     * @param string $ebayPaymentCurrency
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayPaymentCurrency($ebayPaymentCurrency);
    
    /**
     * Set ebay_order_total_item
     *
     * @param float $ebayOrderTotalItem
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalItem($ebayOrderTotalItem);
    
    /**
     * Set ebay_order_total_item_tax
     *
     * @param float $ebayOrderTotalItemTax
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalItemTax($ebayOrderTotalItemTax);
    
    /**
     * Set ebay_order_total_shipping
     *
     * @param float $ebayOrderTotalShipping
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalShipping($ebayOrderTotalShipping);
    
    /**
     * Set ebay_order_total_discount
     *
     * @param float $ebayOrderTotalDiscount
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderTotalDiscount($ebayOrderTotalDiscount);
    
    /**
     * Set ebay_order_sumtotal
     *
     * @param float $ebayOrderSumtotal
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayOrderSumtotal($ebayOrderSumtotal);
    
    /**
     * Set ebay_checkout_payment_status
     *
     * @param string $ebayCheckoutPaymentStatus
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutPaymentStatus($ebayCheckoutPaymentStatus);
    
    /**
     * Set ebay_checkout_payment_method
     *
     * @param string $ebayCheckoutPaymentMethod
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutPaymentMethod($ebayCheckoutPaymentMethod);
    
    /**
     * Set ebay_checkout_status
     *
     * @param string $ebayCheckoutStatus
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutStatus($ebayCheckoutStatus);
    
    /**
     * Set ebay_checkout_last_modified_time
     *
     * @param string $ebayCheckoutLastModifiedTime
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbayCheckoutLastModifiedTime($ebayCheckoutLastModifiedTime);
    
    /**
     * Set ebay_selling_manager_sales_record_number
     *
     * @param int $ebaySellingManagerSalesRecordNumber
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setEbaySellingManagerSalesRecordNumber($ebaySellingManagerSalesRecordNumber);
    
    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\OrderInterface
     */
    public function setUpdateTime($update_time);

}

