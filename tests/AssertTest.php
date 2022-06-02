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
        $expected = 'foo' . "\r\n" . 'bar';
        $actual = 'foo' . "\r\n" . 'bar';
        $assert->equalsWithoutLE($expected, $actual);
    }

    public function testInvokeMethod(): void
    {
        $assert = new Assert();
        $object = new class {
            protected function foo(): string
            {
                return 'foo';
            }
        };
        $this->assertSame('foo', $assert->invokeMethod($object, 'foo'));
    }
}
