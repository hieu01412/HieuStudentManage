<?php
/**
 * StudentManagemant
 *
 * @copyright Copyright © 2020 landofcoder. All rights reserved.
 * @author    landofcoder@gmail.com
 */

namespace Lof\HieuStudentManage\Model;

use Lof\HieuStudentManage\Api\StudentManagemantInterface;
use Lof\HieuStudentManage\Model\ResourceModel\Student\Collection;
use Lof\HieuStudentManage\Model\ResourceModel\Student\CollectionFactory;
use Magento\Store\Model\StoreManagement;
use Magento\Store\Model\StoreManagementInterface;
use phpDocumentor\Reflection\Types\This;

class StudentManagemant implements StudentManagemantInterface
{
    /**
     * @var \Lof\HieuStudentManage\Model\Student
     */
    protected $_studentmodel;


    /**
     * @var $_storemanagement
     */
    protected $_storemanagement;


    protected $_storemanagementinterface;

    /**
     * StudentManagemant constructor.~
     * @param \Lof\HieuStudentManage\Model\Student $student
     */
    public function __construct(Student $student, CollectionFactory $_studentmodel, StoreManagement $storeManagement, StoreManagementInterface $_storemanagementinterface)
    {
        $this->_studentmodel = $_studentmodel;
        $this->_storemanagement = $storeManagement;
        $this->_storemanagementinterface = $storeManagement;
    }

    /**
     * @inheritDoc
     */
    public function getStudentList($value, $storeCode)
    {
        // TODO: Implement getStudentList() method.
        /**
         * @var Collection $collection
         */
        $collection = $this->_studentmodel->create();

        $collection->addFieldToSelect('*')->addFieldToSelect(
            [

            ]
        );


    }
}
