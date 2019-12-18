# Assets helper bundle

Petit bundle Symfony 4 permettant de gérer un peu plus simplement les chemins vers les images et les fichiers Css et JS. Pour fonctionner, le bundle [Asset Component - Symfony](https://github.com/symfony/asset) doit être installé.

### Installation

```bash
composer require dbout/assets-helper-bundle
```

### Utilisation

```php
use Dbout\AssetsHelperBundle\Helper\AssetsHelperInterface;

public function contactUs(AssetsHelperInterface $assetsHelper) 
{
    $css = $assetsHelper->css('app.css');
    // Return http://my-site.com/css/app.css
    
    $js = $assetsHelper->css('app.js');
    // Return http://my-site.com/js/js.css

    $picture = $assetsHelper->image('avatar.png');
    // Return http://my-site.com/images/avatar.png
}
```

dans Twig :

```twig
<link rel="stylesheet" href="{{ css('app.css') }}" type="text/css" />
<script type="text/javascript" src="{{ js('app.js') }}"></script>
<img src="{{ image('avatar.png'}}" alt="Avatar" >
```

### Configuration

Pour fonctionner, le bundle se base sur le bundle [Asset Component - Symfony](https://github.com/symfony/asset). Ainsi, ce bundle doit être [configuré](https://symfony.com/doc/current/reference/configuration/framework.html#assets) avec au minimum les 3 packages suivants :

```yaml
# config/packages/framework.yaml

framework:
    ...
    assets:
        packages:
            css:
                base_path: '/css'
            js:
                base_path: '/js'
            image:
                base_path: '/images'
```