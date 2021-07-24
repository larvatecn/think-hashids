<?php

declare(strict_types=1);

namespace Larva\Hashids;

use Hashids\Hashids;
use think\Service;

/**
 * 服务提供者
 * @author Tongle Xu <xutongle@gmail.com>
 */
class HashidsService extends Service
{
    /**
     * 注册服务
     */
    public function register(): void
    {
        $this->app->bind('hashids.connection', function () {
            $config = $this->app['config']->get('hashids');
            return new Hashids($config['salt'], $config['length'] ?? 0, $config['alphabet']);
        });
    }
}
