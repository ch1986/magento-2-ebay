<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Location;

use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Save extends \Magento\Backend\App\Action
{

    /**
     * @param Action\Context $context
     */
    public function __construct(Action\Context $context)
    {
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_location_save');
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {
            /** @var \Softwarech\Magento2Ebay\Model\Location $model */
            $model = $this->_objectManager->create('Softwarech\Magento2Ebay\Model\Location');

            $id = $this->getRequest()->getParam('location_id');
            if ($id) {
                $model->load($id);
            }

            $model->setData($data);

            $this->_eventManager->dispatch(
                'softwarech_magento2ebay_location_prepare_save',
                ['location' => $model, 'request' => $this->getRequest()]
            );

            try {
                $model->save();
                $this->messageManager->addSuccess(__('You saved this Location.'));
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['location_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the location.'));
            }

            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/edit', ['location_id' => $this->getRequest()->getParam('location_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}