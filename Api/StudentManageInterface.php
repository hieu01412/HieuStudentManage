<?php
namespace Lof\HieuStudentManage\Api;

interface StudentManageInterface
{

    /**
     * GET for Post api
     * @param string $student_id
     * @return \Lof\HieuStudentManage\Model\StudentManage
     */
    public function getById($student_id);
}



