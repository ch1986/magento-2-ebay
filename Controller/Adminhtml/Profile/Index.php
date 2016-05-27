<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Profile;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Softwarech_Magento2Ebay::softwarech_magento2ebay_profile');
        $resultPage->addBreadcrumb(__('Profiles'), __('Profiles'));
        $resultPage->addBreadcrumb(__('Manage Profiles'), __('Manage Profiles'));
        $resultPage->getConfig()->getTitle()->prepend(__('Profiles'));

        return $resultPage;
    }

    /**
     * Is the user allowed to view the profile grid.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_profile');
    }


}