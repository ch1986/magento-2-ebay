<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\LocationInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Location extends \Magento\Framework\Model\AbstractModel implements LocationInterface, IdentityInterface
{

    /**#@+
     * Location's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_location';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_location';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_location';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Location');
    }

    /**
     * Prepare location's statuses.
     * Available event softwarech_magento2ebay_location_get_available_statuses to customize statuses.
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
        return $this->getData(self::LOCATION_ID);
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getData(self::COUNTRY);
    }
    
    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->getData(self::LOCATION);
    }
    
    /**
     * Get postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->getData(self::POSTAL_CODE);
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
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setId($id)
    {
        return $this->setData(self::LOCATION_ID, $id);
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setCountry($country)
    {
        return $this->setData(self::COUNTRY, $country);
    }
    
    /**
     * Set location
     *
     * @param string $location
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setLocation($location)
    {
        return $this->setData(self::LOCATION, $location);
    }
    
    /**
     * Set postal_code
     *
     * @param string $postalCode
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setPostalCode($postalCode)
    {
        return $this->setData(self::POSTAL_CODE, $postalCode);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\LocationInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

