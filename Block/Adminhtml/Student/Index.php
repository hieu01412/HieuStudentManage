<?php


namespace Lof\HieuStudentManage\Block\Adminhtml\Student;

//class Index extends \Magento\Backend\Block\Template
//{
//
//    /**
//     * Constructor
//     *
//     * @param \Magento\Backend\Block\Template\Context  $context
//     * @param array $data
//     */
//    public function __construct(
//        \Magento\Backend\Block\Template\Context $context,
//        array $data = []
//    ) {
//        parent::__construct($context, $data);
//    }
//}

use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend((__('Student')));

        return $resultPage;
    }
}
