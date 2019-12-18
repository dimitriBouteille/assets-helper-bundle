<?php

namespace Dbout\AssetsHelperBundle\Helper;

/**
 * Interface AssetsHelperInterface
 *
 * @package Dbout\AssetsHelperBundle\Helper
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
interface AssetsHelperInterface
{

    /**
     * @param string $css
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function css(string $css, bool $absoluteUrl = true): ?string;

    /**
     * @param string $js
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function js(string $js, bool $absoluteUrl = true): ?string;

    /**
     * @param string $image
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function image(string $image, bool $absoluteUrl = true): ?string;

    /**
     * @param string $path
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function get(string $path, bool $absoluteUrl = true): ?string;

}