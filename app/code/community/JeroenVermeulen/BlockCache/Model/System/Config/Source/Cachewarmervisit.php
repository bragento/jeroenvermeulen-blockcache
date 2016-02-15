<?php
/**
 * JeroenVermeulen_BlockCache
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this Module to
 * newer versions in the future.
 *
 * @category     JeroenVermeulen
 * @package      JeroenVermeulen_BlockCache
 * @copyright    Copyright (c) 2016 Jeroen Vermeulen (http://www.jeroenvermeulen.eu)
 */

class JeroenVermeulen_BlockCache_Model_System_Config_Source_Cachewarmervisit
{
    public function toOptionArray()
    {
        return array(
            array('value'=>1, 'label'=>Mage::helper('adminhtml')->__('Flush JV BlockCache blocks + Warm page')),
            array('value'=>2, 'label'=>Mage::helper('adminhtml')->__('Flush all blocks + Warm page')),
            array('value'=>0, 'label'=>Mage::helper('adminhtml')->__('Warm page only')),
        );
    }
}
