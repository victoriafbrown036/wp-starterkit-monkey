<?php
/*******************************************************************************
* THUMBNAILS (In WORDPRESS Post e Product WOOCOMMERCE)
* Aggiunge classe CSS custom a tutti i thumbnails del template
*******************************************************************************/
function add_custom_atr_thumbnail($attr) {
  remove_filter('wp_get_attachment_image_attributes','add_custom_atr_thumbnail');
  $attr['class'] .= ' img-full-responsive';
  return $attr;
}
add_filter('wp_get_attachment_image_attributes','add_custom_atr_thumbnail'); 