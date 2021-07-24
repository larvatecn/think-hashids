# think-hashids

适用于 ThinkPHP 6 的 HashID 扩展.

[![Packagist](https://img.shields.io/packagist/l/larva/think-hashids.svg?maxAge=2592000)](https://packagist.org/packages/larva/think-hashids)
[![Total Downloads](https://img.shields.io/packagist/dt/larva/think-hashids.svg?style=flat-square)](https://packagist.org/packages/larva/think-hashids)


## 安装

```bash
composer require larva/think-hashids -vv
```

## 配置

配置 'config/hashids.php' 即可。

## 使用
```php
\Larva\Hashids\Facades\Hashids::encode('abv');
\Larva\Hashids\Facades\Hashids::decode('abv');
```
