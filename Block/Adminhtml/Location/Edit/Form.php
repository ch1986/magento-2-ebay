<?php
namespace Softwarech\Magento2Ebay\Block\Adminhtml\Location\Edit;

/**
 * Adminhtml location edit form
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{

    /**
     * @var \Magento\Store\Model\System\Store
     */
    protected $_systemStore;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig
     * @param \Magento\Store\Model\System\Store $systemStore
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Store\Model\System\Store $systemStore,
        array $data = []
    ) {
        $this->_systemStore = $systemStore;
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
        $this->setId('location_form');
        $this->setTitle(__('Location Information'));
    }

    /**
     * Prepare form
     *
     * @return $this
     */
    protected function _prepareForm()
    {
        /** @var \Softwarech\Magento2Ebay\Model\Location $model */
        $model = $this->_coreRegistry->registry('softwarech_magento2ebay_location');

        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            ['data' => ['id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post']]
        );

        $form->setHtmlIdPrefix('location_');

        $fieldset = $form->addFieldset(
            'base_fieldset',
            ['legend' => __('General Information'), 'class' => 'fieldset-wide']
        );

        if ($model->getLocationId()) {
            $fieldset->addField('location_id', 'hidden', ['name' => 'location_id']);
        }

        $fieldset->addField(
            'location',
            'text',
            ['name' => 'location', 'label' => __('Location Address'), 'title' => __('Location Address'), 'required' => true]
        );
        
        $fieldset->addField(
            'postal_code',
            'text',
            ['name' => 'postal_code', 'label' => __('Location Postal Code'), 'title' => __('Location Postal Code'), 'required' => true]
        );
        
        $fieldset->addField(
            'country',
            'text',
            ['name' => 'country', 'label' => __('Location Country'), 'title' => __('Location Country'), 'required' => true]
        );

        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
