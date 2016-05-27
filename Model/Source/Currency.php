<?php

namespace Softwarech\Magento2Ebay\Model\Source;

class Currency implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     */
    protected $_currency;
 
    /**
     * Constructor
     *
     */
    public function __construct($currency)
    {
        $this->_currency = $currency;
    }
 
    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];        
		$options[] = ['label' => 'EUR', 'value' => 'EUR'];
		$options[] = ['label' => 'USD', 'value' => 'USD'];
		$options[] = ['label' => 'GBP', 'value' => 'GBP'];
        return $options;
    }
}