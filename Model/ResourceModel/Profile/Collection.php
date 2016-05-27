<?php namespace Softwarech\Magento2Ebay\Model\ResourceModel\Profile;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'profile_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\Profile', 'Softwarech\Magento2Ebay\Model\ResourceModel\Profile');
    }

}

