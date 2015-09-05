<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartitcarousel
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick-theme.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/slick/slick.css');
$document->addStyleSheet(JURI::base() . '/modules/mod_outsmartitcarousel/assets/outsmartitcarousel.css');
$CarouselType = $params->get('carousel_type');
$CarouselSpeed = $params->get('CarSpeed');
$CarouselItems = $params->get('nrOfItems');
$skrollItems = $params->get('scrollitems',2);
$autoplay = $params->get('autoplay');
$pause = $params->get('pauseonhover');
$centermode = $params->get('centermode');
$pagination = $params->get('pagination',1);
$caption = $params->get('mycaption',0);
$arrows = $params->get('arrows');
if ($arrows){
    $arrows = 'true';
}
else{
    $arrows = 'false';
}
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
