<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface;
use Magento\Framework\DataObject\IdentityInterface;

class ProductMapping extends \Magento\Framework\Model\AbstractModel implements ProductMappingInterface, IdentityInterface
{

    /**#@+
     * ProductMapping's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_product_mapping';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_product_mapping';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_product_mapping';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\ProductMapping');
    }

    /**
     * Prepare product mapping's statuses.
     * Available event softwarech_magento2ebay_product_mapping_get_available_statuses to customize statuses.
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
        return $this->getData(self::MAPPING_ID);
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
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }
    
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }
    
    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }
    
    /**
     * Get ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->getData(self::EAN);
    }
    
    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->getData(self::BRAND);
    }
    
    /**
     * Get mpn
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->getData(self::MPN);
    }
    
    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }
    
    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->getData(self::PRICE);
    }
    
    /**
     * Get stp
     *
     * @return string
     */
    public function getStp()
    {
        return $this->getData(self::STP);
    }
    
    /**
     * Get stock
     *
     * @return string
     */
    public function getStock()
    {
        return $this->getData(self::STOCK);
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
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setId($id)
    {
        return $this->setData(self::MAPPING_ID, $id);
    }
    
    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setProfileId($profileId)
    {
        return $this->setData(self::PROFILE_ID, $profileId);
    }
	
    /**
     * Set title
     *
     * @param string $title
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }
    
    /**
     * Set sku
     *
     * @param string $sku
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }
    
    /**
     * Set ean
     *
     * @param string $ean
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setEan($ean)
    {
        return $this->setData(self::EAN, $ean);
    }
    
    /**
     * Set brand
     *
     * @param string $brand
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setBrand($brand)
    {
        return $this->setData(self::BRAND, $brand);
    }
    
    /**
     * Set mpn
     *
     * @param string $mpn
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setMpn($mpn)
    {
        return $this->setData(self::MPN, $mpn);
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }
    
    /**
     * Set price
     *
     * @param string $price
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }
    
    /**
     * Set stp
     *
     * @param string $stp
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setStp($stp)
    {
        return $this->setData(self::STP, $stp);
    }
    
    /**
     * Set stock
     *
     * @param string $stock
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setStock($stock)
    {
        return $this->setData(self::STOCK, $stock);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

