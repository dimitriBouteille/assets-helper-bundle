<?php

namespace Dbout\AssetsHelperBundle;

use Dbout\AssetsHelperBundle\DependencyInjection\Compiler\AssetsHelperCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class AssetsHelperBundle
 *
 * @package Dbout\AssetsHelperBundle
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class AssetsHelperBundle extends Bundle
{

    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AssetsHelperCompilerPass());
    }

}