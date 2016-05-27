<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\ProfileInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Profile  extends \Magento\Framework\Model\AbstractModel implements ProfileInterface, IdentityInterface
{

    /**#@+
     * Profile's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_profile';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_profile';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_profile';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Profile');
    }

    /**
     * Prepare profile's statuses.
     * Available event softwarech_magento2ebay_profile_get_available_statuses to customize statuses.
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
        return $this->getData(self::PROFILE_ID);
    }

    /**
     * Get site_id
     *
     * @return int|null
     */
    public function getSiteId()
    {
        return $this->getData(self::SITE_ID);
    }
    
    /**
     * Get location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->getData(self::LOCATION_ID);
    }
    
    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->getData(self::USERNAME);
    }
    
    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->getData(self::CURRENCY);
    }
    
    /**
     * Get ebay_auth_token
     *
     * @return string
     */
    public function getEbayAuthToken()
    {
        return $this->getData(self::EBAY_AUTH_TOKEN);
    }
    
    /**
     * Get ebay_environment
     *
     * @return string
     */
    public function getEbayEnvironment()
    {
        return $this->getData(self::EBAY_ENVIRONMENT);
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
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setId($id)
    {
        return $this->setData(self::PROFILE_ID, $id);
    }

    /**
     * Set site_id
     *
     * @param int $siteId
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setSiteId($siteId)
    {
        return $this->setData(self::SITE_ID, $siteId);
    }
    
    /**
     * Set location_id
     *
     * @param int $locationId
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setLocationId($locationId)
    {
        return $this->setData(self::LOCATION_ID, $locationId);
    }
    
    /**
     * Set username
     *
     * @param string $username
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setUsername($username)
    {
        return $this->setData(self::USERNAME, $username);
    }
    
    /**
     * Set currency
     *
     * @param string $currency
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setCurrency($currency)
    {
        return $this->setData(self::CURRENCY, $currency);
    }
    
    /**
     * Set ebay_auth_token
     *
     * @param string $ebayAuthToken
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setEbayAuthToken($ebayAuthToken)
    {
        return $this->setData(self::EBAY_AUTH_TOKEN, $ebayAuthToken);
    }
    
    /**
     * Set ebay_environment
     *
     * @param string $ebayEnvironment
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setEbayEnvironment($ebayEnvironment)
    {
        return $this->setData(self::EBAY_ENVIRONMENT, $environment);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProfileInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

