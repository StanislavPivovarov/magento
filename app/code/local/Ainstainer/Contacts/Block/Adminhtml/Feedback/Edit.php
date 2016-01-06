<?php

class Ainstainer_Contacts_Block_Adminhtml_Feedback_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{

    /**
     *
     */
    protected function _construct()
    {
        $this->_objectId   = 'feedback_id';
        $this->_blockGroup = 'ainstainer_contacts';
        $this->_controller = 'adminhtml_feedback';

    }

    /**
     * @return string
     */
    public function getHeaderText()
    {
        $helper = Mage::helper('contacts');
        $model = Mage::registry('current_feedback');

        if ($model->getFeedbackId()) {
            return $helper->__("Edit Feedback item '%s'", $this->escapeHtml($model->getName()));
        } else {
            return $helper->__("Add News item");
        }
    }

}