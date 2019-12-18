<?php

namespace Dbout\AssetsHelperBundle\Helper;

use Symfony\Component\Asset\Packages;
use Symfony\Component\HttpFoundation\UrlHelper;

/**
 * Class AssetsHelper
 *
 * @package Dbout\AssetsHelperBundle\Helper
 *
 * @author      Dimitri BOUTEILLE <bonjour@dimitri-bouteille.fr>
 * @link        https://github.com/dimitriBouteille Github
 * @copyright   (c) 2019 Dimitri BOUTEILLE
 */
class AssetsHelper implements AssetsHelperInterface
{

    const PACKAGE_CSS = 'css';
    const PACKAGE_JS = 'js';
    const PACKAGE_IMAGE = 'image';

    /**
     * Name of packages that must be initialized in the assets bundle
     * https://symfony.com/doc/current/reference/configuration/framework.html#assets
     * @var array
     */
    private $packagesName = [
        self::PACKAGE_CSS =>    'css',
        self::PACKAGE_JS =>     'js',
        self::PACKAGE_IMAGE =>  'image',
    ];

    /**
     * @var UrlHelper
     */
    protected $urlHelper;

    /**
     * @var Packages
     */
    protected $packages;

    /**
     * AssetsHelper constructor.
     * @param Packages $packages
     * @param UrlHelper $urlHelper
     */
    public function __construct(Packages $packages, UrlHelper $urlHelper)
    {
        $this->urlHelper = $urlHelper;
        $this->packages = $packages;
    }

    /**
     * @param string $image
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function image(string $image, bool $absoluteUrl = true): ?string
    {
        return $this->makePath($image, self::PACKAGE_IMAGE, $absoluteUrl);
    }

    /**
     * @param string $css
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function css(string $css, bool $absoluteUrl = true): ?string
    {
        return $this->makePath($css, self::PACKAGE_CSS, $absoluteUrl);
    }

    /**
     * @param string $js
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function js(string $js, bool $absoluteUrl = true): ?string
    {
        return $this->makePath($js, self::PACKAGE_JS, $absoluteUrl);
    }

    /**
     * @param string $path
     * @param bool $absoluteUrl
     * @return string|null
     */
    public function get(string $path, bool $absoluteUrl = true): ?string
    {
        return $this->makePath($path, null, $absoluteUrl);
    }

    /**
     * @param string $file
     * @param string|null $packageType
     * @param bool $absoluteUrl
     * @return string|null
     */
    private function makePath(string $file, ?string $packageType, bool $absoluteUrl = true): ?string
    {
        $packageName = null;
        if($packageType && key_exists($packageType, $this->packagesName)) {
            $packageName = $this->packagesName[$packageType];
        }

        $url = $this->packages->getUrl($file, $packageName);
        if($url && $absoluteUrl) {
            $url = $this->urlHelper->getAbsoluteUrl($url);
        }

        return $url;
    }

}