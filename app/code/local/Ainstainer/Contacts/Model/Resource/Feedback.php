<?php


class Ainstainer_Contacts_Model_Resource_Feedback extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('ainstainer_contacts/feedback', 'feedback_id');
    }
}