<?php
namespace Lof\HieuStudentManage\Block;

class Index extends  \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Lof\HieuStudentManage\Model\StudentFactory $studentFactory)
    {
        parent::__construct($context);
        $this->_studentFactory = $studentFactory;

    }

    public function helloworld()
    {
        echo "hieu";
    }
    public function getStudentCollection(){
        $student = $this->_studentFactory->create();
        return $student->getCollection();
    }
}