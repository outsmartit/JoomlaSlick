<?php

/**
 * @package : Joomla.site
 * @subpackage Carousel module
 */
defined('_JEXEC') or die;
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick-theme.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick.css');
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


$gumberimage1 = $params->get('image1');
$gumberimage2 = $params->get('image2');
$gumberimage3 = $params->get('image3');
$gumberimage4 = $params->get('image4');
$gumberimage5 = $params->get('image5');
$gumberimage6 = $params->get('image6');
$gumberimage7 = $params->get('image7');
$gumberimage8 = $params->get('image8');
$gumberimage9 = $params->get('image9');
$gumberimage10 = $params->get('image10');
require JModuleHelper::getLayoutPath('mod_outsmartitcarousel', 'default');
