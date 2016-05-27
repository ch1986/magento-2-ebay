<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface SiteInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SITE_ID           = 'site_id';
    const EBAY_SITE_ID      = 'ebay_site_id';
    const NAME              = 'name';
    const ABBREVIATION      = 'abbreviation';
    const CREATION_TIME     = 'creation_time';
    const UPDATE_TIME       = 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get ebay_site_id
     *
     * @return int|null
     */
    public function getEbaySiteId();
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName();
    
    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation();

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
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setId($id);

    /**
     * Set ebay_site_id
     *
     * @param int $ebaySiteId
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setEbaySiteId($ebaySiteId);
    
    /**
     * Set name
     *
     * @param string $name
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setName($name);
    
    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setAbbreviation($abbreviation);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setUpdateTime($update_time);

}

