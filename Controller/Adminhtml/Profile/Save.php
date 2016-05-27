<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Profile;

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
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_save');
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
            /** @var \Softwarech\Magento2Ebay\Model\Profile $model */
            $model = $this->_objectManager->create('Softwarech\Magento2Ebay\Model\Profile');

            $id = $this->getRequest()->getParam('profile_id');
            if ($id) {
                $model->load($id);
            }

            $model->setData($data);

            $this->_eventManager->dispatch(
                'softwarech_magento2ebay_profile_prepare_save',
                ['profile' => $model, 'request' => $this->getRequest()]
            );

            try {
                $model->save();
                $this->messageManager->addSuccess(__('You saved this Profile.'));
                $this->_objectManager->get('Magento\Backend\Model\Session')->setFormData(false);
                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['profile_id' => $model->getId(), '_current' => true]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the profile.'));
            }

            $this->_getSession()->setFormData($data);
            return $resultRedirect->setPath('*/*/edit', ['profile_id' => $this->getRequest()->getParam('profile_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}