<?php
require "Cylinder.php";

class CylinderTest
{

    public function testGetVolume0And0()
    {
        $radius = 0;
        $height = 0;
        $expected = 0;

        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
        $equal = $this->assertEquals($expected, $result);

        return !$equal ? "Đúng" : "Sai";
    }

    public function assertEquals($expected, $result)
    {
        $equal = $expected === $result;
        return $equal;
    }

    /**
     *Test
     *DisplayName("Testing getVolume(1, 2)")
     */

    public function testGetVolume1And2()
    {
        $radius = 1;
        $height = 2;
        $expected = 18.84955592153876;

        $cylinder = new Cylinder();
        $result = $cylinder->getVolume($radius, $height);
        $equal = $this->assertEquals($expected, $result);

        return !$equal ? "Đúng" : "Sai";
    }

    public function __toString()
    {
        return $this->testGetVolume0And0() . "<br>" . $this->testGetVolume1And2();
    }
}
