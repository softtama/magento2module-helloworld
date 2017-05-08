<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */
namespace Ciptaloka\HelloWorld\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class HelloWorld extends AbstractDb
{
    /**
     * Model initialization
     */
    protected function _construct()
    {
        $this->_init('ciptaloka_helloworld', 'id');
    }
}
