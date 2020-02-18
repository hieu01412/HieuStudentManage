<?php
namespace Lof\HieuStudentManage\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    protected $_pageFactory;

    protected $_studentFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Lof\HieuStudentManage\Model\StudentFactory $studentFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_studentFactory = $studentFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
