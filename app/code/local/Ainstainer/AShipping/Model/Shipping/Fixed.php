<?php

class Ainstainer_AShipping_Model_Shipping_Fixed
    extends Mage_Shipping_Model_Carrier_Abstract
    implements Mage_Shipping_Model_Carrier_Interface
{

    protected $_code = 'ashipping';


    /**
     * @return array
     */
    public function getAllowedMethods()
    {
        return array('ain'=>$this->getConfigData('name'));
    }


    /**
     * @param Mage_Shipping_Model_Rate_Request $request
     * @return bool
     */
    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        if (!$this->getConfigFlag('active')) {
            return false;
        }

        $shippingPrice = $this->getConfigData('price');
        $result = Mage::getModel('shipping/rate_result');
        $shippingPrice = $this->getFinalPriceWithHandlingFee($shippingPrice);

        if ($shippingPrice !== false) {
            $result->append($this->_getAinRate($shippingPrice));
        }

        return $result;
    }


    /**
     * @param $shippingPrice
     * @return Mage_Shipping_Model_Rate_Result_Method
     */
    protected function _getAinRate($shippingPrice)
    {
        $rate = Mage::getModel('shipping/rate_result_method');

        $rate->setCarrier($this->_code);
        $rate->setCarrierTitle($this->getConfigData('title'));
        $rate->setMethod('ainstainer');
        $rate->setMethodTitle($this->getConfigData('name'));
        $rate->setPrice($shippingPrice);
        $rate->setCost($shippingPrice);

        return $rate;
    }
}