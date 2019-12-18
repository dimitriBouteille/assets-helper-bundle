<?php

namespace Dbout\AssetsHelperBundle\Twig\Extension;

use Dbout\AssetsHelperBundle\Helper\AssetsHelperInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class AssetExtension
 *
 * @package Dbout\AssetsHelperBundle\Twig\Extension
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class AssetExtension extends AbstractExtension
{

    /**
     * @var AssetsHelperInterface
     */
    private $asset;

    /**
     * AssetExtension constructor.
     * @param AssetsHelperInterface $asset
     */
    public function __construct(AssetsHelperInterface $asset)
    {
        $this->asset = $asset;
    }

    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        $config = ['is_safe' => ['html',]];
        return [
            new TwigFunction('css', [$this, 'getCss'], $config),
            new TwigFunction('js', [$this, 'getJs'], $config),
            new TwigFunction('image', [$this, 'getImage'], $config),
        ];
    }

    /**
     * @param string $file
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function getCss(string $file, bool $absoluteUrl = true): ?string
    {
        return $this->asset->css($file, $absoluteUrl);
    }

    /**
     * @param string $file
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function getJs(string $file, bool $absoluteUrl = true): ?string
    {
        return $this->asset->js($file, $absoluteUrl);
    }

    /**
     * @param string $file
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function getImage(string $file, bool $absoluteUrl = true): ?string
    {
        return $this->asset->image($file, $absoluteUrl);
    }

}