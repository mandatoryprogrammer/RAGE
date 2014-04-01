<?php

if( isset($_GET['r']) ) {
    $response = gzuncompress( base64_decode( substr( $_GET['r'], 2 ) ) );
    file_put_contents( "response.txt", $response );
}

?>
