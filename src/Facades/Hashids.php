<?php

declare(strict_types=1);

namespace Larva\Hashids\Facades;

/**
 * @method static string encode(mixed ...$numbers)
 * @method static array decode(string $hash)
 * @method static string encodeHex(string $str)
 * @method static string decodeHex(string $hash)
 * @method static \Hashids\Hashids connection(string|null $name = null)
 */
class Hashids extends \think\Facade
{
    protected static function getFacadeClass(): string
    {
        return 'hashids';
    }
}
