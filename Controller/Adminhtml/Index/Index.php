<?php
/**
 * Created by PhpStorm.
 * User: luannguyen
 * Date: 12/05/2021
 * Author: luannh@magenest.com
 */

namespace Magenest\ImageUpload\Controller\Adminhtml\Index;


use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    const ADMIN_RESOURCE = 'Magenest_ImageUpload::index';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Test Image Upload'));
        return $resultPage;
    }
}
