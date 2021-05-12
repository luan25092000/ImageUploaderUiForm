<?php
/**
 * Created by PhpStorm.
 * User: luannguyen
 * Date: 12/05/2021
 * Author: luannh@magenest.com
 */

namespace Magenest\ImageUpload\Controller\Adminhtml\Index;

use Exception;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magenest\ImageUpload\Model\ImageUploader;
use Magento\Framework\Controller\ResultFactory;

class Upload extends Action
{
    /**
     * Image uploader
     *
     * @var ImageUploader
     */
    protected $imageUploader;

    /**
     * Upload constructor.
     * @param Context $context
     * @param ImageUploader $imageUploader
     */
    public function __construct(Context $context, ImageUploader $imageUploader)
    {
        $this->imageUploader = $imageUploader;
        parent::__construct($context);
    }

    public function execute()
    {
        $imageId = $this->_request->getParam('param_name', 'image');

        try {
            $result = $this->imageUploader->saveFileToTmpDir($imageId);
        } catch (Exception $e) {
            $result = ['error' => $e->getMessage(), 'errorcode' => $e->getCode()];
        }
        return $this->resultFactory->create(ResultFactory::TYPE_JSON)->setData($result);
    }
}
