<?php

use PHPUnit_Framework_TestCase as PHPUnit;
use Application\NativeElements\Math;

class PHPNativeElementsTest extends PHPUnit
{
    
    public function setUp()
    {
        $this->math = new Math;
    }
    
    public function testOperacaoMatematica()
    {
        $this->assertEquals(3, $this->math->sum(1, 2), 'Não somou corretamente');
    }
    
    public function tearDown()
    {
        
        
    }
}

