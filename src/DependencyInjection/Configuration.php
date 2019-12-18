<?php

namespace Dbout\AssetsHelperBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package Dbout\AssetsHelperBundle\DependencyInjection
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class Configuration implements ConfigurationInterface
{

    /**
     * @return TreeBuilder|void
     */
    public function getConfigTreeBuilder()
    {
        return new TreeBuilder('assets_helper');
    }
}