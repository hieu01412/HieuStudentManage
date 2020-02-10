<?php


namespace Lof\HieuStudentManage\Controller\Adminhtml\Student;

use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Delete extends Action
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Lof_HieuStudentManage::delete');
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('student_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model=$this->_objectManager->create(\Lof\HieuStudentManage\Model\Student::class);
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('The student has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['student_id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find a post to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}
