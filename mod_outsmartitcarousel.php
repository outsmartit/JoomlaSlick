<?php

/**
 * @package : Joomla.site
 * @subpackage Carousel module
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick-theme.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/outsmartitcarousel.css');
$gumberCarousel = $params->get('carousel_type');
$gumberspeed = $params->get('CarSpeed');
$gumberitems = $params->get('nrOfItems');
$pagination = $params->get('pagination');
if ($pagination){
    $paginationbool = 'true';
}
else{
    $paginationbool = 'false';
}
$jq = $params->get('add_jquery');
$carousel_id = "carousel-demo-" . $module->id;


$car_img = array();
for ($i = 1; $i < 11; $i++) {
    $number= 'image'.$i;
    $captionnr='caption'.$i;
    $car_img[$number] = $params->get($number);
    $car_img[$captionnr] = $params->get($captionnr);
}
require JModuleHelper::getLayoutPath('mod_outsmartitcarousel', 'default');
