<?php

class TestingTest extends WebTestCase
{
    public function testPoliteHomePage()
    {
        $this->open('');
        $this->assertTextPresent('Share your code');
    }
}