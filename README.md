# Chainy - a nicer way to apply a set of functions to a value

Have you ever written code like this?

```php
$array = array_filter($array);
$array = array_map(
    $array,
    function($element) {
        // ... manipulations ...
        return $modifiedElement;
    }
);
sort($array);
```

Know what? You could do the same in a more readable and nice way:

```php

$chain = (new \chainy\Chain)

    ->filter()

    ->map(
        function($element) {
            // ... manipulations ...
            return $modifiedElement;
        }
    )

    ->sort();

$array = $chain->apply($array);
```

Chainy is a pipeline of functions, where every next one gets input from the previous one's output. In the example above,
when _$chain->apply()_ is called on _$array_, it goes sequentially through  _filter()_, _map()_ and _sort()_. As you can expect, those methods are just wrappers for the PHP's built-in functions _array_filter_, _array_map_ and _sort_.

This is how things go with chainy:

1. Create new Chain instance.
1. Setup the pipeline, adding elements to the chain (in this casem _filter_ to get rid of empty element, _map_ to apply some modifications to every element that survived filter, and then sort the resulting array).
1. Call Chain->apply() on the input array. The result is the filtered, modified and sorted array.

```php
$chain = (new \chainy\Chain)

+------> filter() --+
|                   |
|    +--------------+
|    |
|    +-> map(function()...) --+
|                             |
|    +------------------------+
|    |
|    +-> sort();
|
| $array = $chain->apply($array);
|                          |
|--------------------------+
```

