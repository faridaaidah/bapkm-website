# Changelog

## [v1.6](https://github.com/translation/laravel/releases/tag/v1.6) (2019-01-31)

#### Fixes (bugs & defects):

  * Default locale independent to translation setup (PR #9), thanks @nikosv
  * Improve readability of target language JSON files by not escaping unicode chars or slashes.

## [v1.5](https://github.com/translation/laravel/releases/tag/v1.5) (2018-09-28)

#### Fixes (bugs & defects):

  * Increase the compatibility with Laravel 5.1 (maybe less).

## [v1.4](https://github.com/translation/laravel/releases/tag/v1.4) (2018-09-07)

#### Fixes (bugs & defects):

  * Fix important bug that didn't detect some existing translations when `php artisan translation:init` a new already-translated project.

## [v1.3](https://github.com/translation/laravel/releases/tag/v1.3) (2018-08-08)

#### New features:

  * Management of JSON translations (source text) (more info [here](https://github.com/translation/laravel#laravel-localization-json-source-text)).

## [v1.2](https://github.com/translation/laravel/releases/tag/v1.2) (2018-07-13)

#### Fixes (bugs & defects):

  * If a sync received no content for a PHP file (ex: if it was untranslated), it was not removed an neither its content.

## [v1.1](https://github.com/translation/laravel/releases/tag/v1.1) (2018-04-10)

#### New features:

  * 'set.locale' middleware to set the locale globally (more info [here](https://github.com/translation/laravel#globally)).

## [v1.0](https://github.com/translation/laravel/releases/tag/v1.0) (2018-03-23)

#### New features:

  * Synchronize PHP keys/values and GetText with Translation.io.
