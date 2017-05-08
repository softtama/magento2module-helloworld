<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */
namespace Ciptaloka\HelloWorld\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Framework\App\Helper\Context;

class ConfigurationHelper extends AbstractHelper
{
    CONST ENABLE      = 'ciptaloka_helloworld/general/enable';
    CONST BLOCK_LABEL = 'ciptaloka_helloworld/general/block_label';
    CONST TEXT_ALIGN  = 'ciptaloka_helloworld/general/text_align';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function getEnable()
    {
        return $this->scopeConfig->getValue(self::ENABLE);
    }

    public function getBlockLabel()
    {
        return $this->scopeConfig->getValue(self::BLOCK_LABEL);
    }

    public function getTextAlign()
    {
        return $this->scopeConfig->getValue(self::TEXT_ALIGN);
    }
}
