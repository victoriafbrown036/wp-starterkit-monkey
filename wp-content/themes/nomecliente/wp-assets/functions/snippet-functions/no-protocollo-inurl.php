<?php
/*******************************************************************************
* PULISCE URL IMMAGINI - HTTP/HTTPS
* Da usare quando carichi url tramite CMB2 così da togliere il protocollo
*******************************************************************************/
function remove_http($url) {
   $disallowed = array('http:', 'https:');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
   }
   return $url;
}

function remove_http_www($url) {
   $disallowed = array('http://www.', 'https://www.');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
   }
   return $url;
}