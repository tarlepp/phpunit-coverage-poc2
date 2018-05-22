<?php

namespace App\Tests;

use App\SomeAnotherClass;
use App\SomeClass;
use PHPUnit\Framework\TestCase;

class SomeClassTest extends TestCase
{
    /**
     * @dataProvider dataProviderTestThatSomeMethodReturnsExpected
     *
     * @param string    $action
     * @param bool|null $expected
     */
    public function testThatSomeMethodAReturnsExpected(string $action, ?bool $expected): void
    {
        $someClass = new SomeClass();

        $this->assertEquals($expected, $someClass->someMethodA($action));
    }

    /**
     * @dataProvider dataProviderTestThatSomeMethodReturnsExpected
     *
     * @param string    $action
     * @param bool|null $expected
     */
    public function testThatSomeMethodBReturnsExpected(string $action, ?bool $expected): void
    {
        $someClass = new SomeClass();

        $this->assertEquals($expected, $someClass->someMethodB($action));
    }

    public function dataProviderTestThatSomeMethodReturnsExpected(): array
    {
        return [
            [
                SomeAnotherClass::COUNT_ACTION,
                true,
            ],
            [
                SomeAnotherClass::FIND_ACTION,
                true,
            ],
            [
                SomeAnotherClass::FIND_ONE_ACTION,
                true,
            ],
            [
                SomeAnotherClass::IDS_ACTION,
                true,
            ],
            [
                SomeAnotherClass::CREATE_ACTION,
                false,
            ],
            [
                SomeAnotherClass::DELETE_ACTION,
                false,
            ],
            [
                SomeAnotherClass::PATCH_ACTION,
                false,
            ],
            [
                SomeAnotherClass::UPDATE_ACTION,
                false,
            ],
            [
                'foobar',
                null,
            ]
        ];
    }
}
