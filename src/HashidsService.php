<?php

declare(strict_types=1);

namespace Larva\Hashids;

use Hashids\Hashids;
use think\Container;

class HashidsService extends \think\Service
{

    public function register(): void
    {
        $this->registerFactory();
        $this->registerManager();
        $this->registerBindings();
    }

    protected function registerFactory(): void
    {
        $this->app->bind('hashids.factory', function () {
            return new HashidsFactory();
        });
    }

    protected function registerManager(): void
    {
        $this->app->bind('hashids', function (Container $app) {
            $config = $app['config'];
            $factory = $app['hashids.factory'];

            return new HashidsManager($config, $factory);
        });
    }

    protected function registerBindings(): void
    {
        $this->app->bind('hashids.connection', function (Container $app) {
            $manager = $app['hashids'];

            return $manager->connection();
        });
    }

    /**
     * @return string[]
     */
    public function provides(): array
    {
        return [
            'hashids',
            'hashids.factory',
            'hashids.connection',
        ];
    }
}
