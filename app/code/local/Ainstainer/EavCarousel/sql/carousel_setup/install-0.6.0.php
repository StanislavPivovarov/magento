<?php
/**
 * Add my_attribute values
 *
 */

$installer = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$installer->addAttribute(
    'catalog_product',
    'carousel_id',
    array(
        'type'          => 'int',
        'label'         => 'Carousel',
        'required'      => false,
        'sort_order'    => 5 // Place just below SKU (4)
    )
);

$installer->endSetup();
