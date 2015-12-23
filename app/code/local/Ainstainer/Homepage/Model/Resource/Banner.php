<?php


class Ainstainer_Homepage_Model_Resource_Banner extends Mage_Core_Model_Resource_Db_Abstract
{

    /**
     * Initialize resource model
     *
     */
    protected function _construct()
    {
        $this->_init('ainstainer/banner', 'banner_id');
    }
}
