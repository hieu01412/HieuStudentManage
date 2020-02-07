<?php


namespace Lof\HieuStudentManage\Controller\Adminhtml\Student;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\Exception\NoSuchEntityException;

class Delete
{

    /**
     * Delete action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $this->groupRepository->deleteById($id);
                $this->messageManager->addSuccess(__('You deleted the Student.'));
            } catch (NoSuchEntityException $e) {
                $this->messageManager->addError(__('The Student no longer exists.'));
                return $resultRedirect->setPath('studentmanage/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('studentmanage/student/edit', ['id' => $id]);
            }
        }
        return $resultRedirect->setPath('studentmanage/student');
    }
}
