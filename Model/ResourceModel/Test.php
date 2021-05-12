<?php
/**
 * Created by PhpStorm.
 * User: luannguyen
 * Date: 12/05/2021
 * Author: luannh@magenest.com
 */

namespace Magenest\ImageUpload\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Test extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('magenest_custom_upload', 'id');
    }
}
