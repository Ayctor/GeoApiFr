<?php

use GeoApiFr\GeoApiFr;
use PHPUnit\Framework\TestCase;

/**
 * Test class for GeoApiFr
 */
class GeoApiFrTest extends TestCase
{
    /**
     * Test if class instanciate
     * @return boolean Assertion value
     */
    public function testInstantiation()
    {
        $instance = new GeoApiFr;
        $this->assertInstanceOf('\GeoApiFr\GeoApiFr', $instance);
    }
}
