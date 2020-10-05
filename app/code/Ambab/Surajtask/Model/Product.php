<?php

namespace Ambab\Surajtask\Model;

class Product extends \Magento\Catalog\Model\Product
{

	public function getName()
	{
	     $new_name = $this->_getData('name') . ' Ambab_demo';
	     return $new_name;
	}
}