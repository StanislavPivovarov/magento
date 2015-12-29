<?php

class Ainstainer_Contacts_Block_Adminhtml_Feedback_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    /**
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getResourceModel('ainstainer_contacts/feedback_collection');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * @return $this
     * @throws Exception
     */
    protected function _prepareColumns()
    {

        $helper = Mage::helper('ainstainer_contacts');

        $this->addColumn('feedback_id', array(
            'header' => $helper->__('Feedback ID'),
            'index' => 'feedback_id'
        ));

        $this->addColumn('email', array(
            'header' => $helper->__('Email'),
            'index' => 'email',
            'type' => 'text',
        ));

        $this->addColumn('name', array(
                'header' => $helper->__('Name'),
                'index' => 'name',
                'type' => 'text',
            ));

        $this->addColumn('description', array(
                'header' => $helper->__('Description'),
                'index' => 'description',
                'type' => 'text',
            ));

        $this->addColumn('phone', array(
                'header' => $helper->__('Phone'),
                'index' => 'phone',
                'type' => 'tel',
            ));

        $this->addColumn('created', array(
            'header' => $helper->__('Created'),
            'index' => 'created',
            'type' => 'date',
        ));

        return parent::_prepareColumns();
    }

    public function getRowUrl($model)
    {
        return $this->getUrl('*/*/edit', array(
            'id' => $model->getFeedback_id(),
        ));
    }
}