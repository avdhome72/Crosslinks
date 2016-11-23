<?php

namespace Test;

use DJEM\Crosslinks\Crosslinks;

class PhrasesTest extends \PHPUnit_Framework_TestCase
{
    public function testAny()
    {
        $text = Crosslinks::parse('a b c', ['b' => 'http://ya.ru']);

        $this->assertEquals('a <a href="http://ya.ru">b</a> c', $text);
    }
}