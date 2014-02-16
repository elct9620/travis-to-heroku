<?php

namespace Aotoki;
/**
 * Class HelloWorldTest
 * @author Aotoki
 */
class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function setUp() {
        HelloWorld::reset();
    }

    public function testHelloOneTimes()
    {
        new HelloWorld();
        $this->assertEquals(1, HelloWorld::getCount());
    }

    public function testHelloTwoTimes()
    {
        new HelloWorld();
        new HelloWorld();
        $this->assertEquals(2, HelloWorld::getCount());
    }

    public function testFlush()
    {
        new HelloWorld("Peter");
        $this->assertEquals("Hello, Peter", HelloWorld::flush());
    }
}

