<?php
/*------------------------------------------------------------------------
 # SM saphi - Version 1.0
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_KeepOnTopMenu
{
	public function toOptionArray()
	{	
		return array(
		array('value'=>'1', 'label'=>Mage::helper('bakery')->__('Yes')),		
		array('value'=>'0', 'label'=>Mage::helper('bakery')->__('No'))		
		);
	}
}
