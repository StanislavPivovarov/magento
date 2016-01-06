<?php


class Ainstainer_Contacts_Model_Resource_Feedback_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{


    /**
     * Initialize Collection
     *
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('ainstainer_contacts/feedback');
    }

}