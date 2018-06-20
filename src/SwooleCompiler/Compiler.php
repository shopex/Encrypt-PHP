<?php
namespace Shopex\Encrypt\SwooleCompiler;

class Compiler
{
    public function encrypt($key, $data)
    {
        return  swoole_encrypt($data, $key);
    }

    public function decrypt($key, $data)
    {
        return  swoole_decrypt($data, $key);
    }
}


