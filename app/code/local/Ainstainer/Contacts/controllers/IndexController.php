<?php


class Ainstainer_Contacts_IndexController extends Mage_Core_Controller_Front_Action
{

    /**
     * Render View
     *
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }


    /**
     * Create new Feedback
     *
     * @throws Exception
     */
    public function createAction()
    {
        //@TODO: Validation
        $data = $this->getRequest()->getPost();

        $model = Mage::getModel('ainstainer_contacts/feedback');
        $model->setData($data);
        if(!$model->getCreated()){
            $model->setCreated(now());
        }
        $model->save();

        $this->_redirect('/');
    }
}
