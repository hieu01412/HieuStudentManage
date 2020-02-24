<?php
namespace Lof\HieuStudentManage\Model;

class StudentRepository
{

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Lof\HieuStudentManage\Model\StudentFactory $studentFactory
    )
    {
        $this->StudentFactory = $studentFactory;
    }


    public function getById($student_Id)
    {

      $student = $this->StudentFactory->create();
      $student->load($student_Id);
      return $student;

    }

}
