<?php


class Ainstainer_Contacts_Helper_Data extends Mage_Contacts_Helper_Data
{

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
}