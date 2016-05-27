<?php
namespace Softwarech\Magento2Ebay\Block\Adminhtml\Profile\Edit;

/**
 * Adminhtml profile edit form
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;
    
    /**
     * @var \Softwarech\Magento2Ebay\Model\Source\Site
     */
    protected $_site;
	
	/**
     * @var \Softwarech\Magento2Ebay\Model\Source\Location
     */
    protected $_location;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param \Softwarech\Magento2Ebay\Model\Source\Site $site
	 * @param \Softwarech\Magento2Ebay\Model\Source\Location $location
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        \Softwarech\Magento2Ebay\Model\Source\Site $site,
		\Softwarech\Magento2Ebay\Model\Source\Location $location,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
        $this->_site = $site;
		$this->_location = $location;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Init form
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('profile_form');
        $this->setTitle(__('Profile Information'));
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        /** @var \Softwarech\Magento2Ebay\Model\Profile $model */
        $model = $this->_coreRegistry->registry('softwarech_magento2ebay_profile');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post']]
        );

        $form->setHtmlIdPrefix('profile_');

        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('General Information'), 'class' => 'fieldset-wide']
        );

        if ($model->getProfileId()) {
            $fieldset->addField('profile_id', 'hidden', ['name' => 'profile_id']);
        }

        $fieldset->addField(
            'username',
            'text',
            ['name' => 'username', 'label' => __('Profile Username'), 'title' => __('Profile Username'), 'required' => true]
        );
		
		// EbayEnvironment - Dropdown
		$ebayEnvironments = array();
		$ebayEnvironments[] = ['label' => 'Production', 'value' => 'production'];
		$ebayEnvironments[] = ['label' => 'Sandbox', 'value' => 'sandbox'];
		$fieldset->addField(
            'ebay_environment',
            'select',
            ['name' => 'ebay_environment', 'label' => __('Ebay Environment'), 'title' => __('Ebay Environment'), 'required' => true, 'values' => $ebayEnvironments]
        );
        
        // Site - Dropdown
        $sites = $this->_site->toOptionArray();
        $fieldset->addField(
            'site_id',
            'select',
            ['name' => 'site_id', 'label' => __('Site'), 'title' => __('Site'), 'required' => true, 'values' => $sites]
        );
		
		// Currency - Dropdown
		$currencies = array();
		$currencies[] = ['label' => 'EUR', 'value' => 'EUR'];
		$currencies[] = ['label' => 'USD', 'value' => 'USD'];
		$currencies[] = ['label' => 'GBP', 'value' => 'GBP'];
		$fieldset->addField(
            'currency',
            'select',
            ['name' => 'currency', 'label' => __('Currency'), 'title' => __('Currency'), 'required' => true, 'values' => $currencies]
        );
		
		// Location - Dropdown
        $locations = $this->_location->toOptionArray();
        $fieldset->addField(
            'location_id',
            'select',
            ['name' => 'location_id', 'label' => __('Location'), 'title' => __('Location'), 'required' => true, 'values' => $locations]
        );
		

        /*
        $fieldset->addField(
            'site_id',
            'text',
            [
                'name' => 'site_id',
                'label' => __('Site ID'),
                'title' => __('Site ID'),
                'required' => true
            ]
        );*/


        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
