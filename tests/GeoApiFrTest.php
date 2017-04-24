<?php

use GeoApiFr\GeoApiFr;
use PHPUnit\Framework\TestCase;

class GeoApiFrTest extends TestCase
{
    public function testInstantiation()
    {
        $instance = new GeoApiFr;
        $this->assertInstanceOf('\GeoApiFr\GeoApiFr', $instance);
    }
}
