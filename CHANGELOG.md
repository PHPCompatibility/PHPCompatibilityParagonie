# Changelog for PHPCompatibilityParagonie

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](https://semver.org/) and [Keep a CHANGELOG](https://keepachangelog.com/).

## [2.0.0-alpha1] - 2025-10-21

* Composer: The PHPCompatibility dependency has been updated to the recently released 10.0.0-alpha1 version.
    Note: in select cases, this means that custom `<exclude>` rules in a project's `[.]phpcs.xml[.dist]` configuration file may needs to be updated.
    Along the same lines, selective `// phpcs:ignore` comments used inline may need to be updated with the new sniff code(s).
    For full information on these kind of changes, please refer to the [Upgrade guide for PHPCompatibility 10.0.0][phpcompat-wiki-upgrade-10].
* The [Composer PHPCS plugin] will now be installed automatically to register PHPCompatibility and other external standards with PHP_CodeSniffer.
    If you have a `require-dev` in place for this plugin in your own `composer.json`, it is strongly recommended to remove this to prevent conflicting version constraints.
    If you previously used another Composer plugin, manually set the `installed_paths` configuration, or set the `installed_paths` in your `[.]phpcs.xml[.dist]` configuration file, it is recommended you remove this in favour of letting the [Composer PHPCS plugin] handle this.
* Support for PHP 5.3 has been dropped. The new minimum supported PHP version is 5.4.
* Support for PHP_CodeSniffer 4.0 has been added.
* Support for PHP_CodeSniffer < 3.13.3 has been dropped.

[phpcompat-wiki-upgrade-10]: https://github.com/PHPCompatibility/PHPCompatibility/wiki/Upgrading-to-PHPCompatibility-10.0

## [1.3.4] - 2025-09-19

* Prevent a new false positive when the ruleset is run over the code of the latest 1.x version of the `sodium_compat` polyfill itself.
* Rulesets now annotate which schema they comply with.
* Other housekeeping and minor documentation updates.

## [1.3.3] - 2024-04-25

* Prevent a new false positive when the ruleset is run over the code of the latest 1.x version of the `sodium_compat` polyfill itself.
* The recommended version of the [Composer PHPCS plugin] is now `^1.0`.
* Other housekeeping. Includes a contribution from [@fredden].

## [1.3.2] - 2022-10-25

* README: Updated the installation instructions for [compatibility with Composer >= 2.2][composer22announce].
* Composer: The package will now identify itself as a static analysis tool. Thanks [@GaryJones]!
* Other housekeeping and minor documentation updates.

[composer22announce]: https://blog.packagist.com/composer-2-2/#more-secure-plugin-execution

## [1.3.1] - 2021-02-15

* The recommended version of the [Composer PHPCS plugin] is now `^0.7.0`, which offers compatibility with Composer 2.0.
* The rulesets are now also tested against PHP 7.4 and 8.0.
    Note: full PHP 7.4 support is only available in combination with PHP_CodeSniffer >= 3.5.6.
    Note: runtime PHP 8.0 support is only available in combination with PHP_CodeSniffer >= 3.5.7, full support is expected in PHP_CodeSniffer 3.6.0.

## [1.3.0] - 2019-11-04

* Ruleset update for full compatibility with version [`1.12.0` of `sodium_compat`][sodium-compat-1.12.0].

[sodium-compat-1.12.0]: https://github.com/paragonie/sodium_compat/releases/tag/v1.12.0

## [1.2.0] - 2019-10-16

* Ruleset update for full compatibility with version [`1.11.0` of `sodium_compat`][sodium-compat-1.11.0].

[sodium-compat-1.11.0]: https://github.com/paragonie/sodium_compat/releases/tag/v1.11.0

## [1.1.0] - 2019-08-29

* The `PHPCompatibilityParagonieSodiumCompat` ruleset has been updated to account for the latest changes in the `sodium_compat` polyfill.
* Prevent false positives when the ruleset is run over the code of the `sodium_compat` polyfill itself.
* Composer: The recommended version of the [Composer PHPCS plugin] has been upped to `^0.5.0`.
* CI: Improved integration test for the `SodiumCompat` ruleset.
* CI: Added early warning system for false positives due to changes in the polyfill libraries themselves.

## [1.0.1] - 2018-12-16

* Prevent false positives when the ruleset is run over the code of the `random_compat` polyfill itself.
* The rulesets are now also tested against PHP 7.3.
    Note: full PHP 7.3 support is only available in combination with PHP_CodeSniffer 2.9.2 or 3.3.1+ due to an incompatibility within PHP_CodeSniffer itself.

## 1.0.0 - 2018-10-07

Initial release of PHPCompatibilityParagonie containing rulesets covering the `random_compat` and `sodium_compat` polyfill libraries.

[Composer PHPCS plugin]: https://github.com/PHPCSStandards/composer-installer/

[2.0.0-alpha1]: https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.3.4...2.0.0-alpha1
[1.3.4]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.3.3...1.3.4
[1.3.3]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.3.2...1.3.3
[1.3.2]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.3.1...1.3.2
[1.3.1]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.3.0...1.3.1
[1.3.0]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.2.0...1.3.0
[1.2.0]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.1.0...1.2.0
[1.1.0]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.0.1...1.1.0
[1.0.1]:        https://github.com/PHPCompatibility/PHPCompatibilityParagonie/compare/1.0.0...1.0.1

[@fredden]:   https://github.com/fredden
[@GaryJones]: https://github.com/GaryJones
