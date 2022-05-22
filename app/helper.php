<?php

//important functions

if (!function_exists('p')) {
    function p($request){
echo '<pre>';
print_r($request);
echo '</pre>';
    }
}
if (!function_exists('get_format_date')) {
     function get_format_date($date,$format)
    {
      $formatDate = date($format,strtotime($date));
      return $formatDate;  
    }
}

?>