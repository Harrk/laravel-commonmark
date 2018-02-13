# Laravel Commonmark
[![Build Status](https://travis-ci.org/Harrk/laravel-commonmark.svg?branch=master)](https://travis-ci.org/Harrk/laravel-commonmark)

Laravel Commonmark is a wrapper for [league/commonmark](https://github.com/thephpleague/commonmark)
which allows for the parsing of regular Markdown as well as CommonMark.
The CommonMark spec can be found at <http://commonmark.org>.

This package can parse Markdown inline or within blade templates using the .md.blade.php file extension.

## Why?
I was looking for a Markdown compiler for Laravel and with being unable to find a package 
compatible with Laravel 5.6 (at the time).
I figured I could take a crack at it.
This also seemed like a good opportunity to gain some experience with open-source projects.

## Installation
This package can only be installed with Laravel 5.6.

```bash
$ composer require harrk/laravel-commonmark
```

## Usage
### Blade
Simply name a blade view with the .md.blade.php extension and it'll automatically parse Markdown
within the view into HTML when rendered.

Any .md.blade.php files can be included into other blade files using `@import` as you would a regular view.

### Dependency Injection
```php
use \League\CommonMark\CommonMarkConverter;

class MyClass {

    public function myFunction(CommonMarkConverter $converter) {
        return $converter->convertToHtml('# H1 Header');
    }
    
}
```

Or if you prefer using helper functions instead:
```php
class MyClass {

    public function myFunction() {
        return markdown('# H1 Header');
    }
    
}
```

## Unit Testing
To run unit tests: 
```bash
$ vendor/bin/phpunit
```

## Alternatives
Check out [graham-campbell/markdown](https://github.com/GrahamCampbell/Laravel-Markdown) for a package that 
offers far greater customisation through the use of CommonMark extensions.