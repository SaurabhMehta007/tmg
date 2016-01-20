<?php
/*------------------------------------------------------------------------
 # SM Bakery - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_ListColor
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'maroon', 'label'=>Mage::helper('bakery')->__('Maroon')),
		array('value'=>'green', 'label'=>Mage::helper('bakery')->__('Green')),
		array('value'=>'brownred', 'label'=>Mage::helper('bakery')->__('Brownred')),
		array('value'=>'blueviolet', 'label'=>Mage::helper('bakery')->__('Blueviolet'))
		);
	}
}
