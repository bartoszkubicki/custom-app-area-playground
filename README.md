# BKubicki CustomAppAreaPlayground

## Overview
Module provides playground and example for practical usage of custom area code

## Features
* adding custom area code
* example of custom xml configuration in custom area
* example of custom front controller for different HTTP request handling

## Prerequisites
Magento 2.2 or higher
PHP 7.1

## Installation ###

##### Via Composer #####

To install the extension using Composer use the
following commands:

```bash
 composer require bkubicki/custom-area-code-playground
 php bin/magento module:enable BKubicki_CustomAppAreaPlayground
 php bin/magento setup:upgrade
 ```

##### From GitHub #####

You can download the extension directly from GitHub and
put it inside `` app/code/BKubicki/CustomAppAreaPlayground `` directory. Then run the
following commands:

```bash
 php bin/magento module:enable BKubicki_CustomAppAreaPlayground
 php bin/magento setup:upgrade
 ```

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/bartoszkubicki/background-process-screen/tags).

## Authors

* [Bartosz Kubicki](https://github.com/bartoszkubicki)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
