<?php


class Ainstainer_Contacts_Helper_Data extends Mage_Contacts_Helper_Data
{

    protected $_googleApiKey = 'AIzaSyBLT0UNe9j_gYquhx_vdMX4U5r-qQ4IUuA';

    /**
     * Rewrite Mage_Contacts_Helper_Data
     *
     * Return default name if not login
     *
     * @return string
     */
    public function getUserName()
    {
        if( ($result = parent::getUserName()) == '' )
        {
            return 'Joe';
        }

        return $result;

    }

    /**
     * Return GoogleApiKey for map
     *
     * @return string
     */
    public function getGoogleApiKey()
    {
        return $this->_googleApiKey;
    }
}