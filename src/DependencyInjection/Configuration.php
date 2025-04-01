<?php

declare(strict_types=1);

namespace Netrising\SyliusIGFSGatewayPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('netrising_sylius_igfs_gateway');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
