JsTreeBundle
============

TadckaJsTreeBundle integrates library JsTree.

## Installation

### Step 1: Download TadckaJsTreeBundle using composer

Add TadckaJsTreeBundle in your composer.json:

```js
{
    "require": {
        "tadcka/jstree-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update tadcka/jstree-bundle
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Tadcka\JsTreeBundle\TadckaJsTreeBundle(),
    );
}
```

### Step 3: Include javascript and css

Add to master composer.json:

```js
{
    "config": {
        "component-dir": "web/components"
    }
}
```

Twig:

```twig
components/jstree/dist/themes/default/style.min.css

components/jquery/jquery.min.js
components/jstree/dist/jstree.min.js
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

Code License:
[Resources/meta/LICENSE](https://github.com/tadcka/JsTreeBundle/blob/master/Resources/meta/LICENSE)
