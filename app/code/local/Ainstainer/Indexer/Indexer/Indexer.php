<?php


class Ainstainer_Indexer_Indexer_Indexer extends Mage_Index_Model_Indexer_Abstract
{
    protected $_matchedEntities = array(
        'test_entity' => array(
            Mage_Index_Model_Event::TYPE_SAVE
        )
    );

    public function getName(){
        return 'Ainstainer Indexer';
    }

    public function getDescription(){
        return 'Ainstainer Indexer Description';
    }

    protected function _registerEvent(Mage_Index_Model_Event $event){

        return $this;
    }

    protected function _processEvent(Mage_Index_Model_Event $event){

    }

    public function reindexAll(){

    }
}