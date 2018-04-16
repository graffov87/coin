<?php

declare(strict_types=1);

namespace Graffov\SyliusCoinPlugin;

use BitBag\SyliusShippingExportPlugin\DependencyInjection\Compiler\RegisterShippingGatewayConfigTypePass;
use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class GraffovSyliusCoinPlugin extends Bundle
{
    use SyliusPluginTrait;

    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RegisterShippingGatewayConfigTypePass());
    }
}
