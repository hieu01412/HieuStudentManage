<?php

declare(strict_types=1);

namespace Lof\HieuStudentMange\Controller\Adminhtml;

use Magento\Framework\App\ObjectManager;
use Magento\Store\Model\Store;
use Magento\Framework\Controller\ResultFactory;

abstract class Student extends \Magento\Backend\App\Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Lof_HieuStudentManage::student_index';


    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Framework\Registry
     */
    private $registry;


    /**
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Cms\Model\Wysiwyg\Config $wysiwigConfig
     * @param \Magento\Backend\Model\Auth\Session $authSession
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter = null,
        \Magento\Store\Model\StoreManagerInterface $storeManager = null,
        \Magento\Framework\Registry $registry = null,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwigConfig = null,
        \Magento\Backend\Model\Auth\Session $authSession = null
    ) {
        parent::__construct($context);
    }

    /**
     * Initialize requested category and put it into registry.
     *
     * Root category can be returned, if inappropriate store/category is specified
     *
     * @param bool $getRootInstead
     * @return \Magento\Catalog\Model\Category|false
     */
    protected function _initStudent($getRootInstead = false)
    {
        $studentId = $this->resolveCategoryId();
        $storeId = $this->resolveStoreId();
        $category = $this->_objectManager->create(\Magento\Catalog\Model\Category::class);
        $category->setStoreId($storeId);

        if ($categoryId) {
            $category->load($categoryId);
            if ($storeId) {
                $rootId = $this->storeManager->getStore($storeId)->getRootCategoryId();
                if (!in_array($rootId, $category->getPathIds())) {
                    // load root category instead wrong one
                    if ($getRootInstead) {
                        $category->load($rootId);
                    } else {
                        return false;
                    }
                }
            }
        }

        $this->registry->unregister('category');
        $this->registry->unregister('current_category');
        $this->registry->register('category', $category);
        $this->registry->register('current_category', $category);
        $this->wysiwigConfig->setStoreId($storeId);
        return $category;
    }

    /**
     * Resolve Category Id (from get or from post)
     *
     * @return int
     */
    private function resolveCategoryId(): int
    {
        $categoryId = (int)$this->getRequest()->getParam('id', false);

        return $categoryId ?: (int)$this->getRequest()->getParam('entity_id', false);
    }

    /**
     * Resolve store Id, tries to take store id from store HTTP parameter
     *
     * @return int
     * @see Store
     *
     */
    private function resolveStoreId(): int
    {
        $storeId = (int)$this->getRequest()->getParam('store', false);

        return $storeId ?: (int)$this->getRequest()->getParam('store_id', Store::DEFAULT_STORE_ID);
    }
}
