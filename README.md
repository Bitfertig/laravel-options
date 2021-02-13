# bitfertig/laravel-options

A package for Laravel that offers a key-value-store.

## Install

### Install via Packagist

...Todo...

### Install via Git-Repo

Add the following to ```composer.json```:
```json
{
    
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/Bitfertig/laravel-options.git"
        }
    ],
    "require": {
        "bitfertig/laravel-options": "dev-main"
    }

}
```

Add the migration file to your project:
```bash
php artisan vendor:publish --provider="Bitfertig\Options\OptionsServiceProvider"
```

Run the migration file:
```bash
php artisan migrate
```


## Usage

```php
$val = option($key)->get($default); // Getter
option($key)->set($val); // Setter
option($key)->remove(); // Remove
```


## Author

Aurelian "dipser" Hermand
