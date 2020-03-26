<?php
namespace Lof\HieuStudentManage\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\ResourceModel\Customer as ResourceCustomer;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory as CustomerCollectionFactory;
use Magento\Customer\Model\CustomerFactory;

class Index extends Template
{
    protected $customerFactory;
    protected $resource;


    public function __construct(Template\Context $context, CustomerFactory $customerFactory, array $data = [])
    {
        $this->customerFactory = $customerFactory;
        parent::__construct($context, $data);
    }
    public function getListCustomer()
    {
        $customerModel = $this->customerFactory->create();
        $collection = $customerModel->getCollection();
        $collection->addFieldToSelect('*');
        $collection->addFieldToFilter('firstname', 'Nguyen');
        return $collection->getData();
    }
}
