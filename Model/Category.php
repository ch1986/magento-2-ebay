<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\CategoryInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Category extends \Magento\Framework\Model\AbstractModel implements CategoryInterface, IdentityInterface
{

    /**#@+
     * Category's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_category';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_category';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_category';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Category');
    }

    /**
     * Prepare category's statuses.
     * Available event softwarech_magento2ebay_category_get_available_statuses to customize statuses.
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
        return $this->getData(self::CATEGORY_ID);
    }
    
    /**
     * Get magento_category_id
     *
     * @return int|null
     */
    public function getMagentoCategoryId()
    {
        return $this->getData(self::MAGENTO_CATEGORY_ID);
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
     * Get ebay_category_id
     *
     * @return int|null
     */
    public function getEbayCategoryId()
    {
        return $this->getData(self::EBAY_CATEGORY_ID);
    }
	
    /**
     * Get ebay_store_category_id
     *
     * @return int|null
     */
    public function getEbayStoreCategoryId()
    {
        return $this->getData(self::EBAY_STORE_CATEGORY_ID);
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
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setId($id)
    {
        return $this->setData(self::CATEGORY_ID, $id);
    }
    
    /**
     * Set magento_category_id
     *
     * @param int $magentoCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setMagentoCategoryId($magentoCategoryId)
    {
        return $this->setData(self::MAGENTO_CATEGORY_ID, $magentoCategoryId);
    }
	
    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setProfileId($profileId)
    {
        return $this->setData(self::PROFILE_ID, $profileId);
    }
	
    /**
     * Set ebay_category_id
     *
     * @param int $ebayCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setEbayCategoryId($ebayCategoryId)
    {
        return $this->setData(self::EBAY_CATEGORY_ID, $ebayCategoryId);
    }
	
    /**
     * Set ebay_store_category_id
     *
     * @param int $ebayStoreCategoryId
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setEbayStoreCategoryId($ebayStoreCategoryId)
    {
        return $this->setData(self::EBAY_STORE_CATEGORY_ID, $ebayStoreCategoryId);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\CategoryInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

