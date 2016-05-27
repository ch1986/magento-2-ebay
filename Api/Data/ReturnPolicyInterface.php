<?php
namespace Softwarech\Magento2Ebay\Api\Data;

interface ReturnPolicyInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const RETURN_POLICY_ID	= 'return_policy_id';
    const SITE_ID		= 'site_id';
    const EBAY_RETURN_POLICY_ID	= 'ebay_return_policy_id';
    const NAME                  = 'name';
    const DESCRIPTION           = 'description';
    const CREATION_TIME		= 'creation_time';
    const UPDATE_TIME		= 'update_time';

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
     * Get ebay_return_policy_id
     *
     * @return int|null
     */
    public function getEbayReturnPolicyId();
    
    /**
     * Get name
     *
     * @return string
     */
    public function getName();
    
    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

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
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setId($id);

    /**
     * Set site_id
     *
     * @param int $siteId
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setSiteId($siteId);
	
	/**
     * Set ebay_return_policy_id
     *
     * @param int $ebayReturnPolicyId
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setEbayReturnPolicyId($ebayReturnPolicyId);
    
    /**
     * Set name
     *
     * @param string $name
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setName($name);
    
    /**
     * Set description
     *
     * @param string $description
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setDescription($description);

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setCreationTime($creation_time);

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\ReturnPolicyInterface
     */
    public function setUpdateTime($update_time);

}

