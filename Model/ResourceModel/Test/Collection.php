<?php
/**
 * Created by PhpStorm.
 * User: luannguyen
 * Date: 12/05/2021
 * Author: luannh@magenest.com
 */

namespace Magenest\ImageUpload\Model\ResourceModel\Test;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Magenest\ImageUpload\Model\Test', 'Magenest\ImageUpload\Model\ResourceModel\Test');
    }
}
