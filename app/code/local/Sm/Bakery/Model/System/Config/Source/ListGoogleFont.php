<?php
/*------------------------------------------------------------------------
 # SM bakery - Version 1.1
 # Copyright (c) 2013 YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_ListGoogleFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'Kameron', 'label'=>Mage::helper('bakery')->__('Kameron')),
			array('value'=>'Oswald', 'label'=>Mage::helper('bakery')->__('Oswald')),
			array('value'=>'Open Sans', 'label'=>Mage::helper('bakery')->__('Open Sans')),
			array('value'=>'BenchNine', 'label'=>Mage::helper('bakery')->__('BenchNine')),
			array('value'=>'Droid Sans', 'label'=>Mage::helper('bakery')->__('Droid Sans')),
			array('value'=>'Droid Serif', 'label'=>Mage::helper('bakery')->__('Droid Serif')),
			array('value'=>'PT Sans', 'label'=>Mage::helper('bakery')->__('PT Sans')),
			array('value'=>'Vollkorn', 'label'=>Mage::helper('bakery')->__('Vollkorn')),
			array('value'=>'Ubuntu', 'label'=>Mage::helper('bakery')->__('Ubuntu')),
			array('value'=>'Neucha', 'label'=>Mage::helper('bakery')->__('Neucha')),
			array('value'=>'Cuprum', 'label'=>Mage::helper('bakery')->__('Cuprum'))	
		);
	}
}
