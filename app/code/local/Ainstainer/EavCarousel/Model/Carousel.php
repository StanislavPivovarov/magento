<?php

class Ainstainer_Homepage_Model_Carousel extends Mage_Eav_Model_Entity_Abstract
{
    /**
     * Initialize model
     *
     */
    protected function _construct()
    {
        $this->_init('carousel/carousel');
    }
}