<?php

namespace Pyz\Glue\CustomApiApplication\Plugin;

use Generated\Shared\Transfer\GlueApiContextTransfer;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\GlueApplicationBootstrapPluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;
use Spryker\Shared\Application\ApplicationInterface;

class CustomApiGlueApplicationBootstrapPlugin extends AbstractPlugin implements GlueApplicationBootstrapPluginInterface
{
    public function isServing(GlueApiContextTransfer $glueApiContextTransfer): bool
    {
        return APPLICATION === 'GLUE_CUSTOM';
    }

    public function getApplication(): ApplicationInterface
    {
        return $this->getFactory()->createCustomApiApplication();
    }
}