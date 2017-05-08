<?php
/**
 * @author      Rizki Pratama @ciptaloka.com
 * @copyright   Copyright (c) 2017 Ciptaloka (http://ciptaloka.com)
 * @package     Ciptaloka_HelloWorld
 */
namespace Ciptaloka\HelloWorld\Block\Catalog\Product;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Ciptaloka\HelloWorld\Helper\ConfigurationHelper;
use \Ciptaloka\HelloWorld\Model\HelloWorldFactory;

class HelloWorld extends Template
{
    /**
     * @var ConfigurationHelper
     */
    protected $_helper;

    /**
     * @var HelloWorldFactory
     */
    protected $_helloWorldFactory;

    public function __construct(
        Context $context,
        HelloWorldFactory $helloWorldFactory,
        array $data = [],
        ConfigurationHelper $helper
    ) {
		parent::__construct($context, $data);
		$this->_helloWorldFactory = $helloWorldFactory;
		$this->_helper = $helper;
	}

    /**
     * Returns 'Hello World!' string
     *
     * @return \Magento\Framework\Phrase
     */
	public function getHelloWorldTxt()
    {
        return __('Hello World!');
    }

    public function getBlockLabel()
    {
        return $this->_helper->getBlockLabel();
    }

    public function getTextAlign()
    {
        return $this->_helper->getTextAlign();
    }

    /**
     * Proceed return the block output if the `Enable Hello World`
     * configuration is set to `Yes`, otherwise just return empty string.
     *
     * @return string
     */
    protected function _toHtml()
    {
        if ($this->_helper->getEnable()) {
            return parent::_toHtml();
        }
        else {
            return '';
        }
    }

    public function getCollection()
    {
        return $this->_helloWorldFactory->create()->getCollection();
    }
}
