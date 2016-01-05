<?php

class Ainstainer_Homepage_Block_Homepage extends Mage_Core_Block_Template
{

    protected $_src;


    /**
     *
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setSrc();
    }


    /**
     * Return src Attribute
     *
     * @return mixed
     */
    public function getSrc()
    {
        return $this->_src;
    }

    /**
     * Set src Attribute
     *
     * @param null $src
     */
    public function setSrc($src=null)
    {
        if($src){
            $this->_src = $src;
        }else {
            $this->_src = 'data:image/svg+xml;base64,
                            PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/
                            PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQyIiBoZW
                            lnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbm
                            UiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXI
                            uanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IE
                            l2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV
                            4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUxYWY1MjUyNWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250
                            LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1z
                            ZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9Imhvb
                            GRlcl8xNTFhZjUyNTI1ZSI+PHJlY3Qgd2lkdGg9IjI0MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUV
                            FRUUiLz48Zz48dGV4dCB4PSI4OS44NTkzNzUiIHk9IjEwNS4xIj4yNDJ4MjAwPC90ZXh0PjwvZz48L2c
                            +PC9zdmc+';
        }
    }

    /**
     * Retrieve all active images
     *
     * @return mixed
     */
    public function images()
    {
        return Mage::getModel('ainstainer/banner')
            ->getCollection()
            ->getAllActiveImages();
    }

    /**
     * Retrieve Banners Url With products witch have it
     *
     * @return mixed
     */
    public function productBanners()
    {
        return Mage::getResourceModel('catalog/product_collection')
                 ->joinField('banner',
                   'homepage_banner',
                   'url',
                     'banner_id=entity_id',
                   null,
                   'right');
    }
}