<?php

namespace Lof\HieuStudentManage\Block\Widget;

use Lof\HieuStudentManage\Model\StudentFactory;
use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Student extends Template implements BlockInterface
{
    protected $_template ="widget/student.phtml";
    /**
     * @var StudentFactory
     */
    private $studentFactory;

    public function __construct(
        Template\Context $context,
        StudentFactory $studentFactory
    ) {
        parent::__construct($context);
        $this->studentFactory = $studentFactory;
    }
    public function getStudentCollection()
    {
        $student = $this->studentFactory->create();
        return $student->getCollection();
    }
}
