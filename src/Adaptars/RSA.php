<?php
namespace Shopex\Encrypt\Adaptars;

use Shopex\Encrypt\AdaptarInterface;
use Shopex\Encrypt\SwooleCompiler\Compiler;

class RSA implements AdaptarInterface
{

    public function __construct($config)
    {
    }

    public function encrypt($key, $stringToEncrypt)
    {
        return 123;
    }

    public function decrypt($key, $stringToDecrypt)
    {
        return 456;
    }

}

