<?php

declare(strict_types=1);

namespace Larva\Hashids;

use Hashids\Hashids;
use think\Container;

class HashidsService extends \think\Service
{

    public function register(): void
    {
        $this->app->bind('hashids.connection', function () {
            $config = Container::getInstance()->get('config')->get('hashids');
            return new Hashids($config['salt'], $config['salt'], $config['length'] ?? 0, $config['alphabet']);
        });
        $this->registerBindings();
    }

    protected function registerBindings(): void
    {

    }
}
