<?php
    define('UPLOAD_DIR', '/');
    $image_parts = explode(";base64,", $_REQUEST['image']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
	$get_ext = explode("data:image/", $image_parts[0]);
    print_r($get_ext);
	$file = UPLOAD_DIR . uniqid() . '.'.$get_ext[1];
    file_put_contents($file, $image_base64);
?>   
