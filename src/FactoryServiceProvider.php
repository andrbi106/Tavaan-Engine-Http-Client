<?php

declare(strict_types=1);

namespace Tavaan\Engine\HttpClient;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\HttpClient\Contracts\FactoryInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * FactoryServiceProvider — ثبت سرویس‌های موتور Factory.
 */
final class FactoryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(FactoryInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new Factory($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('http', $this->app->get(FactoryInterface::class));

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            FactoryInterface::class,
            'http',
        ];
    }
}