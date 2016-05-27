<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface ProductMappingInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const MAPPING_ID	= 'mapping_id';
    const PROFILE_ID	= 'profile_id';
    const TITLE		= 'title';
    const DESCRIPTION	= 'description';
    const SKU		= 'sku';
    const EAN		= 'ean';
    const BRAND		= 'brand';
    const MPN		= 'mpn';
    const IMAGE		= 'image';
    const PRICE		= 'price';
    const STP		= 'stp';
    const STOCK		= 'stock';
    const CREATION_TIME	= 'creation_time';
    const UPDATE_TIME	= 'update_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get profile_id
     *
     * @return int|null
     */
    public function getProfileId();
    
    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();
    
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();
    
    /**
     * Get sku
     *
     * @return string
     */
    public function getSku();
    
    /**
     * Get ean
     *
     * @return string
     */
    public function getEan();
    
    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand();
    
    /**
     * Get mpn
     *
     * @return string
     */
    public function getMpn();
    
    /**
     * Get image
     *
     * @return string
     */
    public function getImage();
    
    /**
     * Get price
     *
     * @return string
     */
    public function getPrice();
    
    /**
     * Get stp
     *
     * @return string
     */
    public function getStp();
    
    /**
     * Get stock
     *
     * @return string
     */
    public function getStock();

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
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setId($id);

    /**
     * Set profile_id
     *
     * @param int $profileId
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setProfileId($profileId);
	
    /**
     * Set title
     *
     * @param string $title
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setTitle($title);
    
    /**
     * Set description
     *
     * @param string $description
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setDescription($description);
    
    /**
     * Set sku
     *
     * @param string $sku
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setSku($sku);
    
    /**
     * Set ean
     *
     * @param string $ean
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setEan($ean);
    
    /**
     * Set brand
     *
     * @param string $brand
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setBrand($brand);
    
    /**
     * Set mpn
     *
     * @param string $mpn
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setMpn($mpn);
    
    /**
     * Set image
     *
     * @param string $image
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setImage($image);
    
    /**
     * Set price
     *
     * @param string $price
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setPrice($price);
    
    /**
     * Set stp
     *
     * @param string $stp
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setStp($stp);
    
    /**
     * Set stock
     *
     * @param string $stock
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setStock($stock);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ProductMappingInterface
     */
    public function setUpdateTime($update_time);

}

