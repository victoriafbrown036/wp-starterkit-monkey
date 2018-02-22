<!-- WPML CAMBIO LINGUA -->
<?php
/*******************************************************************************
* WPML CUSTOM SWITCHER - Mostra codici lingua (es. IT | EN) 
* http://wordpress.stackexchange.com/questions/179075/wpml-customizing-language-selector
*******************************************************************************/
function mysite_languages() {   
  echo '<ul class="lang-switcher">';

    $languages =  icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');

    foreach($languages as $language){
      $flag     = $language['country_flag_url'];
      $url      = $language['url'];
      $isActive = $language['active'];
      $name     = $language['native_name'];
      $langCode = $language['language_code'];

      
      echo '<li class="lang-' . $langCode . '">';
      echo '<a href="' . $url . '"' . 'class="classe-RB ' . ( $language['active'] ? 'active' : ''  ) . '">';
      echo  '<img src="' . $flag . '" alt="' . $name . '" />';
      echo '</a></li>';
      
  }
  echo '</ul>';
}


