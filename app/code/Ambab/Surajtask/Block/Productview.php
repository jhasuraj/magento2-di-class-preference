<?php
namespace Ambab\Surajtask\Block;
use Magento\Framework\View\Element\Template;

class Productview extends Template
{    

    protected $_productloader_del;  


	public function __construct(
	    \Magento\Framework\View\Element\Template\Context $context,
	    \Magento\Catalog\Model\ProductFactory $_productloader

	) {
	    $this->_productloader_del = $_productloader;
	    parent::__construct($context);
	}

    protected function _prepareLayout()
    {
    	$this->setMessage('Product Details');
    }

	public function getLoadProduct($id)
	{
	    return $this->_productloader_del->create()->load($id);
	}


}