<?php

namespace Pyz\Glue\CustomApiApplication;

use Pyz\Glue\CustomApiApplication\Application\CustomApiApplication;
use Spryker\Glue\Kernel\AbstractFactory;
use Spryker\Service\Container\ContainerInterface;
use Spryker\Shared\Application\ApplicationInterface;
use Spryker\Shared\Kernel\Container\ContainerProxy;

class CustomApiApplicationFactory extends AbstractFactory
{
    /**
     * @return \Spryker\Shared\Application\ApplicationInterface
     */
    public function createCustomApiApplication(): ApplicationInterface
    {
        return new CustomApiApplication(
            $this->createServiceContainer(),
            $this->getApplicationPlugins(),
        );
    }

    /**
     * @return \Spryker\Service\Container\ContainerInterface
     */
    public function createServiceContainer(): ContainerInterface
    {
        return new ContainerProxy(['logger' => null, 'debug' => $this->getConfig()->isDebugModeEnabled(), 'charset' => 'UTF-8']);
    }

    /**
     * @return array<\Spryker\Shared\ApplicationExtension\Dependency\Plugin\ApplicationPluginInterface>
     */
    public function getApplicationPlugins(): array
    {
        return $this->getProvidedDependency(CustomApiApplicationDependencyProvider::PLUGINS_APPLICATION);
    }
}