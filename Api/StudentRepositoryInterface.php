<?php
namespace Lof\HieuStudentManage\Api;
use Magento\Framework\Exception\NoSuchEntityException;

interface StudentRepositoryInterface
{

    /**
     * GET for Post api
     * @param string $student_id
     * @return \Lof\HieuStudentManage\Api\Data\StudentInterface
     */
    public function getById($student_id);
}
