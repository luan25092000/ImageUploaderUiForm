<?php
/**
 * Created by PhpStorm.
 * User: luannguyen
 * Date: 12/05/2021
 * Author: luannh@magenest.com
 */

namespace Magenest\ImageUpload\Model;


use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magenest\ImageUpload\Model\ResourceModel\Test');
    }
}
