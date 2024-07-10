<?php

function encryptId($anyId,$encryption_credentials_path)
{
   include($encryption_credentials_path);
   
    $id = openssl_encrypt($anyId, $encrypt_method, $key, 0, $iv);
    $id = base64_encode($id);

    //echo $id;
    return $id;
}

function decryptId($encodedId,$encryption_credentials_path){
    //echo "here";
    include($encryption_credentials_path);
    $id = base64_decode($encodedId);
    $id = openssl_decrypt($id, $encrypt_method, $key, 0, $iv);
    //echo "\n".$id;

    return $id;

}


//$encodedId=encryptId(4,"../../../../config/openssl_encrypt_decrypt_credentials.php");
//decryptId($encodedId,"../../../../config/openssl_encrypt_decrypt_credentials.php");



?>
