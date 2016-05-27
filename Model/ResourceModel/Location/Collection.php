<?php namespace Softwarech\Magento2Ebay\Model\ResourceModel\Location;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'location_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Softwarech\Magento2Ebay\Model\Location', 'Softwarech\Magento2Ebay\Model\ResourceModel\Location');
    }

}

