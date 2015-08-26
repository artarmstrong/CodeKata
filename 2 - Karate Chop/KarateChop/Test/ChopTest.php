<?php

namespace KarateChop\Test;

use KarateChop\Chop;

class ChopTest extends \PHPUnit_Framework_TestCase
{
    public function testChop1()
    {
        $chop = new Chop();

        $this->assertEquals(-1, $chop->chop1(3, []));
        $this->assertEquals(-1, $chop->chop1(3, [1]));
        $this->assertEquals(0, $chop->chop1(1, [1]));
        #
        $this->assertEquals(0, $chop->chop1(1, [1, 3, 5]));
        $this->assertEquals(1, $chop->chop1(3, [1, 3, 5]));
        $this->assertEquals(2, $chop->chop1(5, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop1(0, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop1(2, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop1(4, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop1(6, [1, 3, 5]));
        #
        $this->assertEquals(0, $chop->chop1(1, [1, 3, 5, 7]));
        $this->assertEquals(1, $chop->chop1(3, [1, 3, 5, 7]));
        $this->assertEquals(2, $chop->chop1(5, [1, 3, 5, 7]));
        $this->assertEquals(3, $chop->chop1(7, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop1(0, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop1(2, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop1(4, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop1(6, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop1(8, [1, 3, 5, 7]));
    }

    public function testChop2()
    {
        $chop = new Chop();

        $this->assertEquals(-1, $chop->chop2(3, []));
        $this->assertEquals(-1, $chop->chop2(3, [1]));
        $this->assertEquals(0, $chop->chop2(1, [1]));
        #
        $this->assertEquals(0, $chop->chop2(1, [1, 3, 5]));
        $this->assertEquals(1, $chop->chop2(3, [1, 3, 5]));
        $this->assertEquals(2, $chop->chop2(5, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop2(0, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop2(2, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop2(4, [1, 3, 5]));
        $this->assertEquals(-1, $chop->chop2(6, [1, 3, 5]));
        #
        $this->assertEquals(0, $chop->chop2(1, [1, 3, 5, 7]));
        $this->assertEquals(1, $chop->chop2(3, [1, 3, 5, 7]));
        $this->assertEquals(2, $chop->chop2(5, [1, 3, 5, 7]));
        $this->assertEquals(3, $chop->chop2(7, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop2(0, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop2(2, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop2(4, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop2(6, [1, 3, 5, 7]));
        $this->assertEquals(-1, $chop->chop2(8, [1, 3, 5, 7]));
    }
}
