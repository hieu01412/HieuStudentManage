<?php

namespace Lof\HieuStudentManage\Model;

use Lof\HieuStudentManage\Api\Data\StudentInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel
{
    const CACHE_TAG = 'hieustudentmanage_studentinfo';

    protected $_cacheTag = 'hieustudentmanage_studentinfo';

    protected $_eventPrefix = 'hieustudentmanage_studentinfo';

    protected $_urlBuilder;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\UrlInterface $urlBuilder,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        $this->_urlBuilder = $urlBuilder;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    protected function _construct()
    {
        $this->_init(\Lof\HieuStudentManage\Model\ResourceModel\Student::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

}
