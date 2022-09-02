<?php
declare(strict_types=1);

use App\Helper\Util;
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase
{
    public function testGivenAnEmptyArrayThenGetANullResponse() {
        $testedElements = [];
        $result = Util::findFirstElementOnAlphabeticalOrder($testedElements);
        $this->assertNull($result);
    }

    public function testGivenAnStringListArrayThenGetANullResponse() {
        $testedElements = ['my', 'name', 'is', 'john', 'doe'];
        $result = Util::findFirstElementOnAlphabeticalOrder($testedElements);
        $this->assertEquals('doe', $result);
    }

    public function testGivenAnNumberListArrayThenGetANullResponse() {
        $testedElements = [1, 2, 3.4, 4, 5];
        $result = Util::findFirstElementOnAlphabeticalOrder($testedElements);
        $this->assertEquals('1', $result);
    }

    public function testGivenAnMixedListArrayThenGetANullResponse() {
        $testedElements = ['6', 2, 3.4, 4, 5, 'abc', 'my'];
        $result = Util::findFirstElementOnAlphabeticalOrder($testedElements);
        $this->assertEquals('2', $result);
    }
}