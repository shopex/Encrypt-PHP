<?php
namespace Shopex\Encrypt;

interface AdaptarInterface
{
    public function encrypt($key, $stringToEncrypt);
    public function decrypt($key, $stringToDecrypt);
}
