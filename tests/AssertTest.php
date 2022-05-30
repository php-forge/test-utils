<?php

declare(strict_types=1);

namespace Forge\TestUtils\Tests;

use Forge\TestUtils\Assert;
use PHPUnit\Framework\TestCase;

final class AssertTest extends TestCase
{
    public function testEqualsWithoutLE(): void
    {
        $assert = new Assert();
        $expected = "foo\nbar";
        $actual = "foo\r\nbar";
        $assert->equalsWithoutLE($expected, $actual);
    }
}
