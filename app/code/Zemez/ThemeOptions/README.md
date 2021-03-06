Description
===========
Magento2 Theme Options implementation.

Install
=======

1. Add repo to composer.json file:
```json
{
    "repositories": [
            {
                "type": "composer",
                "url": "https://repo.magento.com/"
            },
            {
                "type": "vcs",
                "url": "http://products.git.devoffice.com/magento/magento2-theme-options.git"
            }
        ]
}
```

2. Add the module to composer:
```bash
composer require zemez/magento2-theme-options:dev-master
```

3. Enable the module:
```bash
bin/magento module:enable --clear-static-content Zemez_ThemeOptions
bin/magento setup:upgrade
```

Configure
=========

Please navigate to the **Stores -> Settings -> Configuration -> Zemez -> Theme Options** in order to configure the module.

Uninstall
=========

1. Disable the module:
```bash
bin/magento module:disable --clear-static-content Zemez_ThemeOptions
```

2. Remove the module from composer:
```bash
composer remove zemez/magento2-theme-options
```