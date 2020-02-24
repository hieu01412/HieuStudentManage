<?php
namespace Lof\HieuStudentManage\Model\Data;

use Lof\HieuStudentManage\Api\Data\StudentInterface;
use Magento\Framework\Api\AbstractExtensibleObject;

class Student extends AbstractExtensibleObject implements StudentInterface
{
    public function getId()
    {
        return $this->getData(self::STUDENT_ID);
    }

    public function setId($student_id)
    {
        return $this->getData(self::STUDENT_ID, $student_id);
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setName($name)
    {
        return $this->getData(self::NAME, $name);
    }

    public function getGender()
    {
        return $this->getData(self::GENDER);
    }

    public function setGender($gender)
    {
        return $this->getData(self::GENDER, $gender);
    }

    public function getDateofbirth()
    {
        return $this->getData(self::GENDER);
    }

    public function setDateofbirth($dataofbirth)
    {
        return $this->getData(self::DATAOFBIRTH, $dataofbirth);
    }

    public function getPhonenumber()
    {
        return $this->getData(self::PHONENUMBER);
    }

    public function setPhonenumber($phonenumber)
    {
        return $this->getData(self::PHONENUMBER, $phonenumber);
    }
    public function getAddress()
    {
        return $this->getData(self::PHONENUMBER);
    }

    public function setAddress($address)
    {
        return $this->getData(self::ADDRESS, $address);
    }
}
