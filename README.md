JsTreeBundle
============

[![Latest Stable Version](https://poser.pugx.org/tadcka/jstree-bundle/v/stable.svg)](https://packagist.org/packages/tadcka/jstree-bundle) [![Total Downloads](https://poser.pugx.org/tadcka/jstree-bundle/downloads.svg)](https://packagist.org/packages/tadcka/jstree-bundle) [![Latest Unstable Version](https://poser.pugx.org/tadcka/jstree-bundle/v/unstable.svg)](https://packagist.org/packages/tadcka/jstree-bundle) [![License](https://poser.pugx.org/tadcka/jstree-bundle/license.svg)](https://packagist.org/packages/tadcka/jstree-bundle)

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
And set component dir, example:

```js
{
    "config": {
        "component-dir": "web/components"
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
