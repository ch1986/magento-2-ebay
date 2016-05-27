<?php namespace Softwarech\Magento2Ebay\Model;

use Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface;
use Magento\Framework\DataObject\IdentityInterface;

class PaymentPolicy extends \Magento\Framework\Model\AbstractModel implements PaymentPolicyInterface, IdentityInterface
{

    /**#@+
     * PaymentPolicy's Statuses
     */
    const STATUS_ENABLED = 1;
    const STATUS_DISABLED = 0;
    /**#@-*/

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'softwarech_magento2ebay_payment_policy';

    /**
     * @var string
     */
    protected $_cacheTag = 'softwarech_magento2ebay_payment_policy';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'softwarech_magento2ebay_payment_policy';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\ResourceModel\PaymentPolicy');
    }

    /**
     * Prepare payment policy's statuses.
     * Available event softwarech_magento2ebay_payment_policy_get_available_statuses to customize statuses.
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
        return $this->getData(self::PAYMENT_POLICY_ID);
    }

    /**
     * Get site_id
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->getData(self::SITE_ID);
    }
    
    /**
     * Get ebay_payment_policy_id
     *
     * @return int
     */
    public function getEbayPaymentPolicyId()
    {
        return $this->getData(self::EBAY_PAYMENT_POLICY_ID);
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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
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
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setId($id)
    {
        return $this->setData(self::PAYMENT_POLICY_ID, $id);
    }
    
    /**
     * Set site_id
     *
     * @param int $siteId
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setSiteId($siteId)
    {
        return $this->setData(self::SITE_ID, $siteId);
    }
    
    /**
     * Set ebay_payment_policy_id
     *
     * @param int $ebayPaymentPolicyId
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setEbayPaymentPolicyId($ebayPaymentPolicyId)
    {
        return $this->setData(self::EBAY_PAYMENT_POLICY_ID, $ebayPaymentPolicyId);
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
    
    /**
     * Set description
     *
     * @param string $description
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return Softwarech\Magento2Ebay\Api\Data\PaymentPolicyInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}

