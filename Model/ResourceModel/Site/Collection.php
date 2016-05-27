<?php namespace Softwarech\Magento2Ebay\Model\ResourceModel\Site;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'site_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\Site', 'Softwarech\Magento2Ebay\Model\ResourceModel\Site');
    }

}

