<?php

use SON\Area;

class MyFirstTest extends PHPUnit_Framework_TestCase
{

    public function testArray()
    {
        $array = [2];
        $this->assertNotEmpty($array);
    }

    public function testArea()
    {
        $area = new Area();
        $this->assertEquals(6, $area->getArea(2, 3));
    }
}
