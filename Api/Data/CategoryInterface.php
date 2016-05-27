<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface CategoryInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const CATEGORY_ID               = 'category_id';
    const MAGENTO_CATEGORY_ID       = 'magento_category_id';
    const PROFILE_ID                = 'profile_id';
    const EBAY_CATEGORY_ID          = 'ebay_category_id';
    const EBAY_STORE_CATEGORY_ID    = 'ebay_store_category_id';
    const CREATION_TIME             = 'creation_time';
    const UPDATE_TIME               = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get magento_category_id
     *
     * @return int|null
     */
    public function getMagentoCategoryId();
	
	/**
     * Get profile_id
     *
     * @return int|null
     */
    public function getProfileId();
	
	/**
     * Get ebay_category_id
     *
     * @return int|null
     */
    public function getEbayCategoryId();
	
	/**
     * Get ebay_store_category_id
     *
     * @return int|null
     */
    public function getEbayStoreCategoryId();

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
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setId($id);

    /**
     * Set magento_category_id
     *
     * @param int $magentoCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setMagentoCategoryId($magentoCategoryId);
	
	/**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setProfileId($profileId);
	
	/**
     * Set ebay_category_id
     *
     * @param int $ebayCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setEbayCategoryId($ebayCategoryId);
	
	/**
     * Set ebay_store_category_id
     *
     * @param int $ebayStoreCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setEbayStoreCategoryId($ebayStoreCategoryId);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setUpdateTime($update_time);

}

