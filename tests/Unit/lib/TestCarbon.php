<?php

namespace Tests\Unit\lib;

use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class TestCarbon extends TestCase
{

  public function testDiffEarly()
  {
	$today = new Carbon('2020-01-29');
	$end   = new Carbon('2020-01-31');

	$diff = $today->diffInDays($end);
	$this->assertEquals($diff, 2); // 2日の差分がある

	$result = $today->lte($end); // 1-29は1-31よりも小さい
	$this->assertTrue($result);
  }

  public function testDiffLate()
  {
	$today = new Carbon('2020-02-03');
	$end   = new Carbon('2020-01-31');

	$diff = $today->diffInDays($end);
	$this->assertEquals($diff, 3); // 2日の差分がある

	$result = $today->lte($end); // 2-03は1-31よりも大きい
	$this->assertFalse($result);
  }

  public function testGet()
  {
$today = Carbon::today();
var_dump($today->month);
	$this->assertFalse(false);
  }

}
