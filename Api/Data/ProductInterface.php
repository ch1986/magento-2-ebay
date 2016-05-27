<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface ProductInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const PRODUCT_ID            = 'product_id';
    const MAGENTO_PRODUCT_ID    = 'magento_product_id';
    const PROFILE_ID            = 'profile_id';
    const EBAY_ITEM_ID          = 'ebay_item_id';
    const CREATION_TIME         = 'creation_time';
    const UPDATE_TIME           = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get magento_product_id
     *
     * @return int|null
     */
    public function getMagentoProductId();
    
    /**
     * Get profile_id
     *
     * @return int|null
     */
    public function getProfileId();
	
    /**
     * Get ebay_item_id
     *
     * @return string
     */
    public function getEbayItemId();

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
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setId($id);

    /**
     * Set magento_product_id
     *
     * @param int $magentoProductId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setMagentoProductId($magentoProductId);
    
    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setProfileId($profileId);
	
    /**
     * Set ebay_item_id
     *
     * @param string $ebayItemId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setEbayItemId($ebayItemId);
    
    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setUpdateTime($update_time);

}

