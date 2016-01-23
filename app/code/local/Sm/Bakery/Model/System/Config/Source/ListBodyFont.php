<?php
/*------------------------------------------------------------------------
 # SM Bakery - Version 1.1
 # Copyright (c) 2013 The YouTech Company. All Rights Reserved.
 # @license - Copyrighted Commercial Software
 # Author: YouTech Company
 # Websites: http://www.magentech.com
-------------------------------------------------------------------------*/

class Sm_Bakery_Model_System_Config_Source_ListBodyFont
{
	public function toOptionArray()
	{	
		return array(
			array('value'=>'Roboto Regular', 'label'=>Mage::helper('bakery')->__('Roboto Regular')),
			array('value'=>'Arial', 'label'=>Mage::helper('bakery')->__('Arial')),
			array('value'=>'Arial Black', 'label'=>Mage::helper('bakery')->__('Arial-black')),
			array('value'=>'Courier New', 'label'=>Mage::helper('bakery')->__('Courier New')),
			array('value'=>'Georgia', 'label'=>Mage::helper('bakery')->__('Georgia')),
			array('value'=>'Impact', 'label'=>Mage::helper('bakery')->__('Impact')),
			array('value'=>'Lucida Console', 'label'=>Mage::helper('bakery')->__('Lucida-console')),
			array('value'=>'Lucida Bakeryde', 'label'=>Mage::helper('bakery')->__('Lucida-bakeryde')),
			array('value'=>'Palatino', 'label'=>Mage::helper('bakery')->__('Palatino')),
			array('value'=>'Tahoma', 'label'=>Mage::helper('bakery')->__('Tahoma')),
			array('value'=>'Times New Roman', 'label'=>Mage::helper('bakery')->__('Times New Roman')),	
			array('value'=>'Trebuchet', 'label'=>Mage::helper('bakery')->__('Trebuchet')),	
			array('value'=>'Verdana', 'label'=>Mage::helper('bakery')->__('Verdana'))		
		);
	}
}
