<?php
namespace Softwarech\Magento2Ebay\Controller\Adminhtml\Location;

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
        $resultPage->setActiveMenu('Softwarech_Magento2Ebay::softwarech_magento2ebay_location');
        $resultPage->addBreadcrumb(__('Locations'), __('Locations'));
        $resultPage->addBreadcrumb(__('Manage Locations'), __('Manage Locations'));
        $resultPage->getConfig()->getTitle()->prepend(__('Locations'));

        return $resultPage;
    }

    /**
     * Is the user allowed to view the location grid.
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Softwarech_Magento2Ebay::softwarech_magento2ebay_location');
    }


}