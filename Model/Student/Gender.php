<?php
/**
 * Gender
 *
 * @copyright Copyright © 2020 lanofcoder. All rights reserved.
 * @author    lanofcoder@gmail.com
 */

namespace Lof\HieuStudentManage\Model\Student;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\DB\Ddl\Table;

class Gender extends \Magento\Framework\DataObject implements OptionSourceInterface
{
    const MALE = 1;

    const FEMALE=0;

    protected $_attribute;
    protected $_eavEntityAttribute;


    public function __construct(
        \Magento\Eav\Model\ResourceModel\Entity\Attribute $eavEntityAttribute,
        array $data = []
    ) {
        $this->_eavEntityAttribute = $eavEntityAttribute;
        parent::__construct($data);
    }

    public function getGenderids()
    {
        return [self::MALE, self::FEMALE];
    }


    public static function getOptionArray()
    {
        return [
            self::MALE => __('Male'),
            self::FEMALE => __('Female'),
        ];
    }

    public static function getAllOption()
    {
        $options = self::getOptionArray();
        array_unshift($options, ['value' => '', 'label' => '']);
        return $options;
    }

    public static function getAllOptions()
    {
        $res = [];
        foreach (self::getOptionArray() as $index => $value) {
            $res[] = ['value' => $index, 'label' => $value];
        }
        return $res;
    }

    public static function getOptionText($optionId)
    {
        $options = self::getOptionArray();
        return isset($options[$optionId]) ? $options[$optionId] : null;
    }

    public function toOptionArray()
    {
        return $this->getAllOptions();
    }

}
