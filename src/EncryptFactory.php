<?php
namespace Shopex\Encrypt;
use Shopex\Encrypt\Adaptars\Swoole;
use RuntimeException;

class EncryptFactory
{
    public static function make($adaptar, $config = [])
    {
        $className = static::getClass($adaptar);
        $encryptObject = new $className($config);
        return $encryptObject;
    }

    public static function getClass($adaptar)
    {
        $map = [
            'swoole' =>Swoole::class
        ];
        $class = $map[$adaptar];

        if(!$class)
            throw new RuntimeException("Cannot find the adaptar named : ". $adaptar);
        return $class;

    }
}
