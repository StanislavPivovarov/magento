<?php


class Ainstainer_Homepage_Model_Resource_Banner_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{

    const ACTIVE   = 1;
    const DISABLED = 0;

    /**
     * Initialize Collection
     *
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('ainstainer/banner');
    }

    /**
     * Retrieve all Active Images for Carousel
     *
     * @return $this
     */
    public function getAllActiveImages()
    {
        return $this->setOrder('banner_id', 'DESK')->addFilter('status', self::ACTIVE);
    }
}