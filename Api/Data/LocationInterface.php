<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface LocationInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const LOCATION_ID       = 'location_id';
    const COUNTRY           = 'country';
    const LOCATION          = 'location';
    const POSTAL_CODE       = 'postal_code';
    const CREATION_TIME     = 'creation_time';
    const UPDATE_TIME       = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry();
    
    /**
     * Get location
     *
     * @return string
     */
    public function getLocation();
    
    /**
     * Get postal_code
     *
     * @return string
     */
    public function getPostalCode();

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
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setId($id);

    /**
     * Set country
     *
     * @param string $country
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setCountry($country);
    
    /**
     * Set location
     *
     * @param string $location
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setLocation($location);
    
    /**
     * Set postal_code
     *
     * @param string $postalCode
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setPostalCode($postalCode);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setUpdateTime($update_time);

}

