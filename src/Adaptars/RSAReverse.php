<?php
namespace Shopex\Encrypt\Adaptars;

use Shopex\Encrypt\AdaptarInterface;

class RSAReverse implements AdaptarInterface
{

    public function __construct($config)
    {
    }

    public function encrypt($key, $data)
    {
        $encrypted = "";
        openssl_public_encrypt($data, $encrypted, $key);
        return $encrypted;
    }

    public function decrypt($key, $data)
    {
        $decrypted = "";
        openssl_private_decrypt($data, $decrypted, $key);
        return $decrypted;
    }

}

