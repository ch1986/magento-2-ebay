<?php

namespace Softwarech\Magento2Ebay\Model\Source;

class Site implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @var \Softwarech\Magento2Ebay\Model\Site
     */
    protected $_site;
 
    /**
     * Constructor
     *
     * @param \Softwarech\Magento2Ebay\Model\Site $site
     */
    public function __construct(\Softwarech\Magento2Ebay\Model\Site $site)
    {
        $this->_site = $site;
    }
 
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $siteCollection = $this->_site->getCollection()
            ->addFieldToSelect('site_id')
            ->addFieldToSelect('name');
        foreach ($siteCollection as $site) {
            $options[] = [
                'label' => $site->getName(),
                'value' => $site->getId(),
            ];
        }
        return $options;
    }
}