<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */
namespace Ciptloka\HelloWorld\Model;

use \Magento\Framework\Model\AbstractModel;

class HelloWorld extends AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
    \Ciptaloka\HelloWorld\Model\Api\Data\HelloWorldInterface
{
    const CACHE_TAG = 'ciptaloka_helloworld_helloworld';
    protected $_cacheTag = 'ciptaloka_helloworld_helloworld';
    protected $_eventPrefix = 'ciptaloka_helloworld_helloworld';

    /**
     * Model constructor
     */
    protected function _construct()
    {
        $this->_init('Ciptaloka\HelloWorld\Model\ResourceModel\HelloWorld');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    public function getLabel()
    {
        return $this->getData(self::LABEL);
    }

    public function setLabel($label)
    {
        return $this->setData(self::LABEL, $label);
    }

    public function getValue()
    {
        return $this->getData(self::VALUE);
    }

    public function setValue($value)
    {
        return $this->setData(self::VALUE, $value);
    }
}
