<?php

class Ainstainer_EventTest_Model_Observer
{

    public function catalogProductLoadAfterAddTestData(Varien_Event_Observer $observer)
    {
        $product = $observer->getProduct();

        $product->setName($product->getName() . '-' . 'Ainstainer');
    }
}
