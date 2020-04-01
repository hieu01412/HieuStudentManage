<?php
namespace Lof\HieuStudentManage\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class ChangeText implements ObserverInterface
{
    /**
     * Execute Observer
     *
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        $testobserver = $observer->getData('test_text');
        echo $testobserver->getText();
        $testobserver->setText('Execute event successfully.');
        return $this;
    }
}
