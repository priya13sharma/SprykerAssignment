<?php

namespace Pyz\Glue\CustomApiApplication\Bootstrap;

use Pyz\Glue\CustomApiApplication\Plugin\CustomApiGlueApplicationBootstrapPlugin;
use Spryker\Glue\GlueApplication\Bootstrap\GlueBootstrap;
use Spryker\Shared\Application\ApplicationInterface;

class GlueCustomApiBootstrap extends GlueBootstrap
{
    /**
     * @param array<string> $glueApplicationBootstrapPluginClassNames
     *
     * @return \Spryker\Shared\Application\ApplicationInterface
     */
    public function boot(array $glueApplicationBootstrapPluginClassNames = []): ApplicationInterface
    {
        return parent::boot([CustomApiGlueApplicationBootstrapPlugin::class]);
    }
}