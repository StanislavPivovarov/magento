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
}
