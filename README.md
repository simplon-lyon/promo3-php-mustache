# PHP & Composer & Mustache

A repository to learn Composer and Mustache !

## Instructions

1. install composer: https://getcomposer.org/doc/00-intro.md
2. install mustache: https://github.com/bobthecow/mustache.php
3. create a page `index.php` which instanciate a Mustache engine and render a `Hello {{name}}` into `Hello World`
4. create a `template` folder with an `index.mustache` page
5. configure mustache to render template from disk: https://github.com/bobthecow/mustache.php/wiki/Template-Loading
6. create a `template/partial` folder with a `header.mustache` file
7. load `partial/header.mustache` from `index.mustache`
8. change the mustache default extension from `.mustache` to `.html`: https://github.com/bobthecow/mustache.php/wiki/Template-Loading

## Simple Website

To complete the work, build a simple website with:
- at least 3 partials (`header`, `footer`, `nav`)
- one more route
- one more template

## Guzzle

1. search for the guzzlehttp/guzzle package on https://packagist.org/
2. create a new page `dog.php`
3. on `dog.php` get a list of breed from https://dog.ceo/ using `guzzle`