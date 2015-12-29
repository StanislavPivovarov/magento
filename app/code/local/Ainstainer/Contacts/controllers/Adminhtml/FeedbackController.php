<?php

class Ainstainer_Contacts_Adminhtml_FeedbackController extends Mage_Adminhtml_Controller_Action
{

    /**
     * Make grid for Feedback - Ainstainer menu
     */
    public function indexAction()
    {
        $this->_title('Feedback');
        $this->loadLayout();
        $this->_setActiveMenu('ainstainer_contacts');
        $this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_feedback  '));
        $this->renderLayout();
    }

    /**
     * New Feedback
     */
    public function newAction()
    {
        $this->_forward('edit');
    }

    /**
     * Render view for edit current Feedback
     */
    public function editAction()
    {
        $id = (int) $this->getRequest()->getParam('id');
        Mage::register('current_feedback', Mage::getModel('ainstainer_contacts/feedback')->load($id));

        $this->loadLayout()->_setActiveMenu('ainstainer_contacts');
        $this->_addContent($this->getLayout()->createBlock('ainstainer_contacts/adminhtml_feedback_edit'));
        $this->renderLayout();
    }


    /**
     * Save Feedback
     */
    public function saveAction()
    { var_dump('ololol');die;
        if ($data = $this->getRequest()->getPost()) {
            try {
                $model = Mage::getModel('ainstainer_contacts/feedback');
                $model->setData($data)->setId($this->getRequest()->getParam('id'));
                if(!$model->getCreated()){
                    $model->setCreated(now());
                }
                $model->save();

                Mage::getSingleton('adminhtml/session')->addSuccess($this->__('News was saved successfully'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array(
                    'id' => $this->getRequest()->getParam('id')
                ));
            }
            return;
        }
        Mage::getSingleton('adminhtml/session')->addError($this->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }


}