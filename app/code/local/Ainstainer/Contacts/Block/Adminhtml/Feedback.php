<?php

class Ainstainer_Contacts_Block_Adminhtml_Feedback extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    /**
     * Ainstainer_Contacts_Block_Adminhtml_Feedback constructor.
     */
    public function __construct()
    {
        $this->_blockGroup = 'ainstainer_contacts';
        $this->_controller = 'adminhtml_feedback';
        $this->_headerText = 'Feedback';

        parent::__construct();
    }

}