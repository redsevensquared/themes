<?php

use PHPUnit\Framework\TestCase as TestCase;
use redsevensquared\themes;

class ExampleTest extends TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * test
     */
    public function testDoesEchoPhraseEcho()
    {
    	$string = 'is this equal?';
    	
    	$this->assertEquals($string, 'is this equal?');
    }
}
