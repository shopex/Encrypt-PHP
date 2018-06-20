<?php
namespace Shopex\Encrypt;

class EncryptFactory
{
    public static function make($className, $config = [])
    {
        $encrypt = new $className($config);
        return $encryptObject;
    }
}
