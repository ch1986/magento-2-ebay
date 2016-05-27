<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Profile;

use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Delete extends \Magento\Backend\App\Action
{

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_profile_delete');
    }

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('profile_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create('Softwarech\Magento2Ebay\Model\Profile');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('The profile has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['profile_id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find a profile to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}