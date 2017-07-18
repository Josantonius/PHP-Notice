# PHP Notice library

[![Latest Stable Version](https://poser.pugx.org/josantonius/notice/v/stable)](https://packagist.org/packages/josantonius/notice) [![Total Downloads](https://poser.pugx.org/josantonius/notice/downloads)](https://packagist.org/packages/josantonius/notice) [![Latest Unstable Version](https://poser.pugx.org/josantonius/notice/v/unstable)](https://packagist.org/packages/josantonius/notice) [![License](https://poser.pugx.org/josantonius/notice/license)](https://packagist.org/packages/josantonius/notice)

[Versión en español](README-ES.md)

PHP library for handling errors and notices.

---

- [Installation](#installation)
- [Requirements](#requirements)
- [Quick Start and Examples](#quick-start-and-examples)
- [Available Methods](#available-methods)
- [Usage](#usage)
- [Tests](#tests)
- [Contribute](#contribute)
- [Repository](#repository)
- [License](#license)
- [Copyright](#copyright)

---

<p align="center"><strong>Take a look at the code</strong></p>

<p align="center">
  <a href="https://youtu.be/_bNnHdJkkKs" title="Take a look at the code">
    <img src="https://raw.githubusercontent.com/Josantonius/PHP-Algorithm/master/resources/youtube-thumbnail.jpg">
  </a>
</p>

---

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install PHP Notice library, simply:

    $ composer require Josantonius/Notice

The previous command will only install the necessary files, if you prefer to download the entire source code (including tests, vendor folder, exceptions not used, docs...) you can use:

    $ composer require Josantonius/Notice --prefer-source

Or you can also clone the complete repository with Git:

	$ git clone https://github.com/Josantonius/PHP-Notice.git

### Requirements

This library is supported by PHP versions 5.6 or higher and is compatible with HHVM versions 3.0 or higher.

### Quick Start and Examples

To use this class, simply:

```php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Notice\Notice;
```
### Available Methods

Available methods in this library:

```php
Notice::get();
Notice::getAll();
```
### Usage

Example of use for this library:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Josantonius\Notice\Notice;

echo "<br>[600] · " . Notice::get(600);
echo "<br>[600] · " . Notice::get(600, 'es');

/*
[600] · This is a test for the error with code 600 in english.
[600] · This is a test for the error with code 600 in spanish.
*/

echo "<br>[800] · " . Notice::get(800);

/*
[800] · Undefined
*/

echo '<pre>'; var_dump(Notice::getAll()); echo '</pre>';

/*
array(2) {
  [600]=>
  string(54) "This is a test for the error with code 600 in english."
  [601]=>
  string(54) "This is a test for the error with code 601 in english."
}
*/

echo '<pre>'; var_dump(Notice::getAll('es')); echo '</pre>';

/*
array(2) {
  [600]=>
  string(58) "Esto es un test para el error con código 600 en español."
  [601]=>
  string(58) "Esto es un test para el error con código 601 en español."
}
*/
```

### Tests 

To use the [test](tests) class, simply:

```php
<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$loader->addPsr4('Josantonius\\Notice\\Tests\\', __DIR__ . '/vendor/josantonius/notice/tests');

use Josantonius\Notice\Tests\NoticeTest;

```
Available test methods in this library:

```php
NoticeTest::testLoad();
NoticeTest::testLoadES();
NoticeTest::testGetEN();
NoticeTest::testGetES();
NoticeTest::testGetUndefinedEN();
NoticeTest::testGetUndefinedES();
NoticeTest::testGetAllEN();
NoticeTest::testGetAllES();
```

### Contribute
1. Check for open issues or open a new issue to start a discussion around a bug or feature.
1. Fork the repository on GitHub to start making your changes.
1. Write one or more tests for the new feature or that expose the bug.
1. Make code changes to implement the feature or fix the bug.
1. Send a pull request to get your changes merged and published.

This is intended for large and long-lived objects.

### Repository

All files in this repository were created and uploaded automatically with [Reposgit Creator](https://github.com/Josantonius/BASH-Reposgit).

### License

This project is licensed under **MIT license**. See the [LICENSE](LICENSE) file for more info.

### Copyright

2017 Josantonius, [josantonius.com](https://josantonius.com/)

If you find it useful, let me know :wink:

You can contact me on [Twitter](https://twitter.com/Josantonius) or through my [email](mailto:hello@josantonius.com).