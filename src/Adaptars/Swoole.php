<?php
namespace Shopex\Encrypt\Adaptars;

use Shopex\Encrypt\AdaptarInterface;
use Shopex\Encrypt\SwooleCompiler\Compiler;

class Swoole implements AdaptarInterface
{
    //加密解密器
    private $encryptor = null;

    public function __construct($config)
    {
        $phpVersion = PHP_VERSION;
        $phpVersionArr = explode(".",$phpVersion);
        $classSuffix = $phpVersionArr[0] . $phpVersionArr[1];
        $encryptorClassName = Compiler::class . $classSuffix;
        $this->encryptor = new $encryptorClassName();
    }

    public function encrypt($key, $stringToEncrypt)
    {
        return $this->encryptor->encrypt($key, $stringToEncrypt);

    }

    public function decrypt($key, $stringToDecrypt)
    {
        return $this->encryptor->decrypt($key, $stringToDecrypt);
    }

}

