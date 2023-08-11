<?php

namespace Spryker\Glue\GlueStorefrontApiApplication\Application;

use Spryker\Client\Session\SessionClient;
use Spryker\Glue\GlueApplication\ApiApplication\Type\RequestFlowAwareApiApplication;
use Spryker\Glue\GlueApplication\Session\Storage\MockArraySessionStorage;
use Spryker\Shared\Application\ApplicationInterface;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * @method \Spryker\Glue\GlueStorefrontApiApplication\GlueStorefrontApiApplicationFactory getFactory()
 */
class GlueStorefrontApiApplication extends RequestFlowAwareApiApplication
{
    /**
     * @return \Spryker\Shared\Application\ApplicationInterface
     */
    public function boot(): ApplicationInterface
    {
        return parent::boot();
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RequestBuilderPluginInterface>
     */
    public function provideRequestBuilderPlugins(): array
    {
        return $this->getFactory()->getRequestBuilderPlugins();
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RequestValidatorPluginInterface>
     */
    public function provideRequestValidatorPlugins(): array
    {
        return $this->getFactory()->getRequestValidatorPlugins();
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\RequestAfterRoutingValidatorPluginInterface>
     */
    public function provideRequestAfterRoutingValidatorPlugins(): array
    {
        return $this->getFactory()->getRequestAfterRoutingValidatorPlugins();
    }

    /**
     * @return array<\Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResponseFormatterPluginInterface>
     */
    public function provideResponseFormatterPlugins(): array
    {
        return $this->getFactory()->getResponseFormatterPlugins();
    }

}