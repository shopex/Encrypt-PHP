# ShopEx Encrypt

## 简介

 - 一个用于数据加密解密的框架

## 用法
```php
<?php

require_once("vendor/autoload.php");
$encrypt = Shopex\Encrypt\EncryptFactory::make("swoole", []);
$keyfile = "./public_key";
$str = $encrypt->encrypt($keyfile, "abc");
//$str == 1JH7VAB8fsBeIRKhtB2yUHoLU+I33aQWR9YvrakBA0Gv7rY/xalkVWBBAPpqPVJFjaWsr
echo $str;
$str2 = $encrypt->encrypt($keyfile, "abc");
//$str2 == abc
echo $str2;

```
