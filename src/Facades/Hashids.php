<?php

declare(strict_types=1);

namespace Larva\Hashids\Facades;

use think\Facade;

/**
 * @method static string encode(mixed ...$numbers)
 * @method static array decode(string $hash)
 * @method static string encodeHex(string $str)
 * @method static string decodeHex(string $hash)
 * @method static \Hashids\Hashids connection(string|null $name = null)
 */
class Hashids extends Facade
{
    /**
     * 获取当前Facade对应类名
     * @access protected
     * @return string
     */
    protected static function getFacadeClass(): string
    {
        return 'hashids';
    }
}
