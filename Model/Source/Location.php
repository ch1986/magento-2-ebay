<?php

namespace Softwarech\Magento2Ebay\Model\Source;

class Location implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Softwarech\Magento2Ebay\Model\Location
     */
    protected $_location;
 
    /**
     * Constructor
     *
     * @param \Softwarech\Magento2Ebay\Model\Location $location
     */
    public function __construct(\Softwarech\Magento2Ebay\Model\Location $location)
    {
        $this->_location = $location;
    }
 
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $locationCollection = $this->_location->getCollection()
            ->addFieldToSelect('location_id')
			->addFieldToSelect('location')
			->addFieldToSelect('postal_code')
            ->addFieldToSelect('country');
        foreach ($locationCollection as $location) {
            $options[] = [
                'label' => $location->getLocation().' '.$location->getPostalCode().' '.$location->getCountry(),
                'value' => $location->getId(),
            ];
        }
        return $options;
    }
}