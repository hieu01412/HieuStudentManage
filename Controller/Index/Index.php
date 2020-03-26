<?php
namespace Lof\HieuStudentManage\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\DataObject;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Lof\HieuStudentManage\Model\StudentFactory;

class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;
    protected $_studentFactory;
    /**
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(Context $context, PageFactory $pageFactory, StudentFactory $studentFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->_studentFactory = $studentFactory;
    }

    /**
     * Index Action
     *
     * @return array
     */
    public function execute()
    {
        $studentModel = $this->_studentFactory->create();
        $collection = $studentModel->getCollection();
        $collection->addFieldToSelect('*');
        $data = $collection->getData();
        header('Content-Type: application/json');
        echo json_encode($data, JSON_UNESCAPED_UNICODE); die();
//        die();
//        header('Content-Type: application/json');
//        json_encode($collection);
//        die;
        $testobserver = new DataObject(array('text' => 'hieu dep trai'));
        $this->_eventManager->dispatch('Lof_HieuStudentManage_testevent', ['test_text' => $testobserver]);
//        $this->_eventManager->dispatch('sales_quote_remove_item', ['quote_item' => $item]);
    }
}
