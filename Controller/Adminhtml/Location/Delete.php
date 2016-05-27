<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Location;

use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Delete extends \Magento\Backend\App\Action
{

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_location_delete');
    }

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('location_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_objectManager->create('Softwarech\Magento2Ebay\Model\Location');
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('The location has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['location_id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find a location to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}