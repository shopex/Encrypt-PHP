<?php
require_once("../vendor/autoload.php");
$encrypt = Shopex\Encrypt\EncryptFactory::make("rsa", []);
$private_key = file_get_contents("./rsa/rsa_private_key.pem");
$public_key = file_get_contents("./rsa/rsa_public_key.pem");
$str = $encrypt->encrypt($private_key, "abcfewafvbnrjklaiskfvbhqeruilfhbvuyeilfhruikkwlfhcnawklqrz2irsfhbcvklaspqrs6rubfgcvkoq6erukbgcvklsoqrruybfgvcskloq6rukfbcgvykloruzjbcfgh6uklzijrrsbcfghklz4aruyqrcbfgaklzruworjybcfgv");
$cc = base64_encode($str);
echo $cc . "\n";

$str2 = $encrypt->decrypt($public_key, base64_decode($cc));
echo $str2;
