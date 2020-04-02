<?php
/**
 * StudentManagemantInterface
 *
 * @copyright Copyright © 2020 landofcoder. All rights reserved.
 * @author    landofcoder@gmail.com
 */
namespace Lof\HieuStudentManage\Api;

interface StudentManagemantInterface
{

    /**
     * @param string $value
     * @param string $storeCode
     * @return string
     */
    public function getStudentList($value, $storeCode);
}