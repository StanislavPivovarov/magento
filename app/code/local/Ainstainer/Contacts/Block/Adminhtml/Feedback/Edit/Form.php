<?php

class Ainstainer_Contacts_Block_Adminhtml_Feedback_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{

    /**
     * Build Form and Upload data if it exists, if no show blank form for create
     *
     * @return Mage_Adminhtml_Block_Widget_Form
     * @throws Exception
     */
    protected function _prepareForm()
    {
        $helper = Mage::helper('contacts');
        $model = Mage::registry('current_feedback');

        $form = new Varien_Data_Form(array(
            'id' => 'feedback_edit',
            'action' => $this->getUrl('*/*/save', array(
                'id' => $this->getRequest()->getParam('feedback_id')
            )),
            'method' => 'post',
        ));

        $this->setForm($form);

        $fieldset = $form->addFieldset('feedback_form', array('legend' => $helper->__('Feedback Information')));

        $fieldset->addField('email', 'text', array(
            'label' => $helper->__('Email'),
            'required' => false,
            'name' => 'email',
        ));

        $fieldset->addField('name', 'text', array(
            'label' => $helper->__('Name'),
            'required' => false,
            'name' => 'name',
        ));

        $fieldset->addField('description', 'editor', array(
            'label' => $helper->__('Description'),
            'required' => false,
            'name' => 'description',
        ));

        $fieldset->addField('created', 'date', array(
            'format' => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
            'image' => $this->getSkinUrl('images/grid-cal.gif'),
            'label' => $helper->__('Created'),
            'name' => 'created'
        ));

        if($data = Mage::getSingleton('adminhtml/session')->getFormData()){
            $form->setValues($data);
        } else {
            $form->setValues($model->getData());
        }

        $form->setUseContainer(true);

        return parent::_prepareForm();
    }

}