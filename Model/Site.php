<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\SiteInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Site extends \Magento\Framework\Model\AbstractModel implements SiteInterface, IdentityInterface
{

    /**#@+
     * Site's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_site';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_site';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_site';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Site');
    }

    /**
     * Prepare site's statuses.
     * Available event softwarech_magento2ebay_site_get_available_statuses to customize statuses.
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
        return $this->getData(self::SITE_ID);
    }

    /**
     * Get ebay_site_id
     *
     * @return int|null
     */
    public function getEbaySiteId()
    {
        return $this->getData(self::EBAY_SITE_ID);
    }
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
    
    /**
     * Get abbreviation
     *
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->getData(self::ABBREVIATION);
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
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setId($id)
    {
        return $this->setData(self::SITE_ID, $id);
    }

    /**
     * Set ebay_site_id
     *
     * @param int $ebaySiteId
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setEbaySiteId($ebaySiteId)
    {
        return $this->setData(self::EBAY_SITE_ID, $ebaySiteId);
    }
    
    /**
     * Set username
     *
     * @param string $name
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
    
    /**
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setAbbreviation($abbreviation)
    {
        return $this->setData(self::ABBREVIATION, $abbreviation);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\SiteInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

