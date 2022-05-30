<p align="center">
    <a href="https://github.com/php-forge/test-utils" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/103309199?s=400&u=ca3561c692f53ed7eb290d3bb226a2828741606f&v=4" height="100px">
    </a>
    <h1 align="center">PHP Forge - Test utils.</h1>
    <br>
</p>

[![Build Status](https://github.com/php-forge/test-utils/workflows/build/badge.svg)](https://github.com/php-forge/test-utils/actions?query=workflow%3Abuild)
[![codecov](https://codecov.io/gh/php-forge/test-utils/branch/main/graph/badge.svg?token=KB6T5KMGED)](https://codecov.io/gh/php-forge/test-utils)
[![Mutation testing badge](https://img.shields.io/endpoint?style=flat&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fphp-forge%2Ftest-utils%2Fmain)](https://dashboard.stryker-mutator.io/reports/github.com/php-forge/test-utils/main)
[![static analysis](https://github.com/php-forge/test-utils/workflows/static%20analysis/badge.svg)](https://github.com/php-forge/test-utils/actions?query=workflow%3A%22static+analysis%22)
[![type-coverage](https://shepherd.dev/github/php-forge/test-utils/coverage.svg)](https://shepherd.dev/github/php-forge/test-utils)

## Instalación

```shell
composer require forge/test-utils
```

## Uso

```php
<?php

declare(strict_types=1);

namespace App\Tests;

use Forge\TestUtils\Assert;

$assert = new Assert();
$expected = "foo\nbar";
$actual = "foo\r\nbar";
$assert->equalsWithoutLE($expected, $actual);
```

## Análisis estático

El código se analiza estáticamente con [Psalm](https://psalm.dev/docs). Para ejecutarlo:

```shell
./vendor/bin/psalm
```

## Pruebas de mutación

Las pruebas de mutación se comprueban con [Infection](https://infection.github.io/). Para ejecutarlo:

```shell
./vendor/bin/roave-infection-static-analysis-plugin
```

## Pruebas unitarias

Las pruebas unitarias se comprueban con [PHPUnit](https://phpunit.de/). Para ejecutarlo:

```shell
./vendor/bin/phpunit
```

## Calidad y estilo de código

[![Codacy Badge](https://app.codacy.com/project/badge/Grade/5265edb5b21e4b3eb04bf869f4f0ce9f)](https://www.codacy.com/gh/php-forge/test-utils/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=php-forge/test-utils&amp;utm_campaign=Badge_Grade)
[![StyleCI](https://github.styleci.io/repos/494495136/shield?branch=main)](https://github.styleci.io/repos/494495136?branch=main)

## Licencia

El paquete `php-forge/test-utils` es software libre. Se publica bajo los términos de la Licencia BSD.
Consulte [`LICENSE`](./LICENSE.md) para obtener más información.

Mantenido por [Terabytesoftw](https://github.com/terabytesoftw).

## Nuestras redes sociales

[![Twitter](https://img.shields.io/badge/twitter-follow-1DA1F2?logo=twitter&logoColor=1DA1F2&labelColor=555555?style=flat)](https://twitter.com/PhpForge)
