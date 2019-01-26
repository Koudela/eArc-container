# eArc-container
Basic 
[PSR-11](https://www.php-fig.org/psr/psr-11/)
compatible php container class, interface and exceptions.

# installation

```bash
$ composer install earc/container
```

# basic usage

```php
use eArc\Container\Items;

$container = new Items();
```

Please refer to the 
[ItemsInterface](https://github.com/Koudela/eArc-container/blob/master/src/Interfaces/ItemsInterface.php) 
for details.

## exceptions

 * An `ItemNotCallableException` is thrown if an item is called that is no 
 callable.

 * An `ItemNotFoundException` is thrown if an item is get or called that does
 not exist.

 * An `ItemOverwriteException` is thrown if an item is set but its name exists 
 already. `overwrite()` does not trigger this exception. 
 
 * All three exceptions inherit from the `ItemException`.
