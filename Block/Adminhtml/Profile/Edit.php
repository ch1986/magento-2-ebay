<?php
namespace Softwarech\Magento2Ebay\Block\Adminhtml\Profile;

class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Initialize profile edit block
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_objectId = 'profile_id';
        $this->_blockGroup = 'Softwarech_Magento2Ebay';
        $this->_controller = 'adminhtml_profile';

        parent::_construct();

        if ($this->_isAllowedAction('Softwarech_Magento2Ebay::softwarech_magento2ebay_save')) {
            $this->buttonList->update('save', 'label', __('Save Profile'));
            $this->buttonList->add(
                'saveandcontinue',
                [
                    'label' => __('Save and Continue Edit'),
                    'class' => 'save',
                    'data_attribute' => [
                        'mage-init' => [
                            'button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form'],
                        ],
                    ]
                ],
                -100
            );
        } else {
            $this->buttonList->remove('save');
        }

        if ($this->_isAllowedAction('Softwarech_Magento2Ebay::softwarech_magento2ebay_profile_delete')) {
            $this->buttonList->update('delete', 'label', __('Delete Profile'));
        } else {
            $this->buttonList->remove('delete');
        }
    }

    /**
     * Retrieve text for header element depending on loaded profile
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
        if ($this->_coreRegistry->registry('softwarech_magento2ebay_profile')->getId()) {
            return __("Edit Profile '%1'", $this->escapeHtml($this->_coreRegistry->registry('softwarech_magento2ebay_profile')->getTitle()));
        } else {
            return __('New Profile');
        }
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }

    /**
     * Getter of url for "Save and Continue" button
     * tab_id will be replaced by desired by JS later
     *
     * @return string
     */
    protected function _getSaveAndContinueUrl()
    {
        return $this->getUrl('profile/*/save', ['_current' => true, 'back' => 'edit', 'active_tab' => '']);
    }
}

