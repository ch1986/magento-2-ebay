<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\ProductInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Product extends \Magento\Framework\Model\AbstractModel implements ProductInterface, IdentityInterface
{

    /**#@+
     * Product's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_product';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_product';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_product';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\Product');
    }

    /**
     * Prepare product's statuses.
     * Available event softwarech_magento2ebay_product_get_available_statuses to customize statuses.
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
        return $this->getData(self::PRODUCT_ID);
    }
    
    /**
     * Get magento_product_id
     *
     * @return int|null
     */
    public function getMagentoProductId()
    {
        return $this->getData(self::MAGENTO_PRODUCT_ID);
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
     * Get ebay_item_id
     *
     * @return string
     */
    public function getEbayItemId()
    {
        return $this->getData(self::EBAY_ITEM_ID);
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
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setId($id)
    {
        return $this->setData(self::PRODUCT_ID, $id);
    }
    
    /**
     * Set magento_product_id
     *
     * @param int $magentoProductId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setMagentoProductId($magentoProductId)
    {
        return $this->setData(self::MAGENTO_PRODUCT_ID, $magentoProductId);
    }
    
    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setProfileId($profileId)
    {
        return $this->setData(self::PROFILE_ID, $profileId);
    }
	
    /**
     * Set ebay_item_id
     *
     * @param string $ebayItemId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setEbayItemId($ebayItemId)
    {
        return $this->setData(self::EBAY_ITEM_ID, $ebayItemId);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

