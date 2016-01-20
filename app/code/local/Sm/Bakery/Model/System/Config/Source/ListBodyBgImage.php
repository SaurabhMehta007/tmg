<?php
/*------------------------------------------------------------------------
 # SM bakery - Version 1.1
 # Copyright (c) 2009-2011 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.sm.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_ListBodyBgImage
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'1', 'label'=>Mage::helper('bakery')->__('pattern1')),
			array('value'=>'2', 'label'=>Mage::helper('bakery')->__('pattern2')),
			array('value'=>'3', 'label'=>Mage::helper('bakery')->__('pattern3')),
			array('value'=>'4', 'label'=>Mage::helper('bakery')->__('pattern4')),
			array('value'=>'5', 'label'=>Mage::helper('bakery')->__('pattern5'))
		);
	}
}
