<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */
namespace Ciptaloka\HelloWorld\Model\ResourceModel\HelloWorld;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Collection constructor
     */
    protected function _construct()
    {
        $this->_init(
            'Ciptaloka\HelloWorld\Model\HelloWorld',
            'Ciptaloka\HelloWorld\Model\ResourceModel\HelloWorld'
        );
    }
}
