<?php

declare(strict_types=1);

namespace Larva\Hashids;

use GrahamCampbell\Manager\AbstractManager;
use Hashids\Hashids;
use Illuminate\Contracts\Config\Repository;

/**
 * @method string encode(mixed ...$numbers)
 * @method array decode(string $hash)
 * @method string encodeHex(string $str)
 * @method string decodeHex(string $hash)
 */
class HashidsManager extends AbstractManager
{
    /**
     * @var \Larva\Hashids\HashidsFactory
     */
    protected $factory;

    public function __construct(Repository $config, HashidsFactory $factory)
    {
        parent::__construct($config);

        $this->factory = $factory;
    }

    protected function createConnection(array $config): Hashids
    {
        return $this->factory->make($config);
    }

    protected function getConfigName(): string
    {
        return 'hashids';
    }

    public function getFactory(): HashidsFactory
    {
        return $this->factory;
    }
}
