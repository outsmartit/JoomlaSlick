<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_outsmartitcarousel
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
if ($jq == 1) {
JHtml::_('jquery.framework');}
$document->addScript(JURI::base() . 'modules/mod_outsmartitcarousel/assets/slick/slick.min.js');

if ($gumberCarousel == 'O') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:false,
   			 autoplay:true,
   			 autoplaySpeed:'.$gumberspeed.',
  			});
		})');
} elseif ($gumberCarousel == 'I') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:false,
   			 autoplay:true,
   			 autoplaySpeed:'.$gumberspeed.',
                         slidesToShow: ' . $gumberitems . ',
                         slidesToScroll: 2
  			});
		})');
}elseif ($gumberCarousel == 'L') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:false,
   			 autoplay:true,
                         lazyLoad: "ondemand",
   			 autoplaySpeed:1000,
                         slidesToShow: ' . $gumberitems . ',
                         slidesToScroll: 1
  			});
		})');
}

    
?>

<div class="<?php echo $carousel_id; ?>" >
    <?php if($gumberimage1) : ?>
    <img src="<?php echo $gumberimage1; ?>" alt="mytext1">
    <?php endif; ?>
    <?php if($gumberimage2) : ?>
    <img src="<?php echo $gumberimage2; ?>" alt="mytext2">
    <?php endif; ?>
    <?php if($gumberimage3) : ?>
    <img src="<?php echo $gumberimage3; ?>" alt="mytext3">
    <?php    endif; ?>
    <?php if($gumberimage4) : ?>
    <img src="<?php echo $gumberimage4; ?>" alt="mytext4">
    <?php    endif; ?>
    <?php if($gumberimage5) : ?>
    <img src="<?php echo $gumberimage5; ?>" alt="mytext5">
    <?php    endif; ?>
    <?php if($gumberimage6) : ?>
    <img src="<?php echo $gumberimage6; ?>" alt="mytext6">
    <?php    endif; ?>
     <?php if($gumberimage7) : ?>
    <img src="<?php echo $gumberimage7; ?>" alt="mytext7">
    <?php    endif; ?>
     <?php if($gumberimage8) : ?>
    <img src="<?php echo $gumberimage8; ?>" alt="mytext8">
    <?php    endif; ?>
     <?php if($gumberimage9) : ?>
    <img src="<?php echo $gumberimage9; ?>" alt="mytext9">
    <?php    endif; ?>
     <?php if($gumberimage10) : ?>
    <img src="<?php echo $gumberimage10; ?>" alt="mytext10">
    <?php    endif; ?>
</div>