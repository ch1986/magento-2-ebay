<?php
namespace Softwarech\Magento2Ebay\Block\Adminhtml;

class Profile extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_profile';
        $this->_blockGroup = 'Softwarech_Magento2Ebay';
        $this->_headerText = __('Manage Profiles');

        parent::_construct();

        if ($this->_isAllowedAction('Softwarech_Magento2Ebay::save')) {
            $this->buttonList->update('add', 'label', __('Add New Profile'));
        } else {
            $this->buttonList->remove('add');
        }
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}
