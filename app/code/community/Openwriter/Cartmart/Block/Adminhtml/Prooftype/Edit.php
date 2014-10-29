<?php
/**
 * Openwriter Cartmart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Magento Team
 * that is bundled with this package of Openwriter.
 * =================================================================
 *                 MAGENTO EDITION USAGE NOTICE
 * =================================================================
 * This package designed for Magento COMMUNITY edition
 * Contact us Support does not guarantee correct work of this package
 * on any other Magento edition except Magento COMMUNITY edition.
 * =================================================================
 * 
 * @category    Openwriter
 * @package     Openwriter_Cartmart
**/
class Openwriter_Cartmart_Block_Adminhtml_Prooftype_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {
        parent::__construct();
        $this->_objectId = 'entity_id';
        $this->_blockGroup = 'cartmart';
        $this->_controller = 'adminhtml_prooftype';
        $this->_updateButton('save', 'label', 'Save Type');
        $this->_updateButton('delete', 'label', 'Delete Type');        
    }

    public function getHeaderText() {
        if (Mage::registry('type_data') && Mage::registry('type_data')->getId()) {
            return 'Edit Type';
        } else {
            return 'Add New Type';
        }
    }

}

?>
