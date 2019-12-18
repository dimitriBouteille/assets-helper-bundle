<?php

namespace Dbout\AssetsHelperBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class AssetsHelperCompilerPass
 *
 * @package Dbout\AssetsHelperBundle\DependencyInjection\Compiler
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class AssetsHelperCompilerPass implements CompilerPassInterface
{

    /**
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
    }

}