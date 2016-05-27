<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface ProfileInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const PROFILE_ID        = 'profile_id';
    const SITE_ID           = 'site_id';
    const LOCATION_ID       = 'location_id';
    const USERNAME          = 'username';
    const CURRENCY          = 'currency';
    const EBAY_AUTH_TOKEN   = 'ebay_auth_token';
    const EBAY_ENVIRONMENT	= 'ebay_environment';
    const CREATION_TIME     = 'creation_time';
    const UPDATE_TIME       = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get site_id
     *
     * @return int|null
     */
    public function getSiteId();
    
    /**
     * Get location_id
     *
     * @return int|null
     */
    public function getLocationId();
    
    /**
     * Get username
     *
     * @return string
     */
    public function getUsername();
    
    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency();
    
    /**
     * Get ebay_auth_token
     *
     * @return string
     */
    public function getEbayAuthToken();
    
    /**
     * Get ebay_environment
     *
     * @return string
     */
    public function getEbayEnvironment();

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
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setId($id);

    /**
     * Set site_id
     *
     * @param int $siteId
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setSiteId($siteId);
    
    /**
     * Set location_id
     *
     * @param int $locationId
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setLocationId($locationId);
    
    /**
     * Set username
     *
     * @param string $username
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setUsername($username);
    
    /**
     * Set currency
     *
     * @param string $currency
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setCurrency($currency);
    
    /**
     * Set ebay_auth_token
     *
     * @param string $ebayAuthToken
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setEbayAuthToken($ebayAuthToken);
    
    /**
     * Set ebay_environment
     *
     * @param string $ebayEnvironment
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setEbayEnvironment($ebayEnvironment);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setUpdateTime($update_time);

}

