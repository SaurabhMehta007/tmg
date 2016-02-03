<?php
/*------------------------------------------------------------------------
 # SM Bakery - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_ListResMenuStyles
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'1', 'label'=>Mage::helper('bakery')->__('Selectbox')),
			array('value'=>'2', 'label'=>Mage::helper('bakery')->__('Collapse')),
			array('value'=>'3', 'label'=>Mage::helper('bakery')->__('Sidebar'))
		);
	}
}
