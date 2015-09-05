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

if ($CarouselType == 'O') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:'.$arrows.',
   			 autoplay:true,
   			 autoplaySpeed:'.$CarouselSpeed.',
                         dots:'.$paginationbool.',   
  			});
		})');
} elseif ($CarouselType == 'I') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:'.$arrows.',
   			 autoplay:true,
   			 autoplaySpeed:'.$CarouselSpeed.',
                             dots:'.$paginationbool.',  
                         slidesToShow: ' . $CarouselItems . ',
                         slidesToScroll: '.$skrollItems.',
  			});
		})');
}elseif ($CarouselType == 'L') {
    $document->addScriptDeclaration('
   	 jQuery(document).ready(function(){
  		jQuery(".'.$carousel_id.'").slick({
   			 arrows:'.$arrows.',
   			 autoplay:true,
                         lazyLoad: "ondemand",
   			 autoplaySpeed:1000,
                         slidesToShow: ' . $CarouselItems . ',
                         slidesToScroll: 1
  			});
		})');
}

    
?>

<div class="<?php echo $carousel_id; ?>" >

    <?php for ($i = 1; $i < 11; $i++) {
        $number= 'image'.$i;
    $captionnr='caption'.$i;
        if($car_img[$number]){
            if($caption){
                echo '<div class="out_slide"><img src="'. $car_img[$number].' " alt="mytext"><div class="out_caption"><span>'.$car_img[$captionnr].'</span></div></div>';
            }else{
            echo '<img src="'. $car_img[$number].' " alt="'.$car_img[$captionnr].'"> ';
            }
            
            }
    }
    ?>
</div>