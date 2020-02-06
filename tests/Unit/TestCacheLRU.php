<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\Unit\CacheLRU;

class TestCacheLRU extends TestCase
{

  public function test()
  {
	$this->assertTrue(true);
  }

  /**
   * インスタンスの確認
   */
  public function testInstance()
  {
	$class = new CacheLRU();
	$this->assertInstanceOf('Tests\Unit\CacheLRU', $class);
  }

  /**
   * マックスサイズの確認
   */
  public function testMaxSize()
  {
	$class    = new CacheLRU();
	$max_size = $class->max_size;

	// プロパティとして設定
	$this->assertObjectHasAttribute('max_size', $class);

	// マックスサイズは3に設定
	$this->assertEquals($max_size, 3);
  }

  /**
   * currentサイズの確認
   */
  public function testCurrentSize()
  {
	$class        = new CacheLRU();
	$current_size = $class->current_size;

	// プロパティとして設定
	$this->assertObjectHasAttribute('current_size', $class);

	// newした時は0で設定されている
	$this->assertEquals($current_size, 0);
  }

  /**
   * 基本的なsetの確認
   * keyは文字列指定とします
   * もちろん同じ名前のkey名が新しくくれば値は上書きされます
   */
  public function testSetBase()
  {
	$cache = new CacheLRU();

	// 1 key:hoge, value:111をset
	$cache->set('hoge', 111);
	$this->assertEquals($cache->current_size, 1); // currentsizeは1のはず

	// 2 key:fuga, value:222をset
	$cache->set('fuga', 222);
	$this->assertEquals($cache->current_size, 2); // currentsizeは2のはず

	// 2 key:hoge, value:112をset
	$cache->set('hoge', 112);
	$this->assertEquals($cache->current_size, 2); // currentsizeは2のはず
  }

  /**
   * getの確認
   */
  public function testGetBase()
  {
	$cache = new CacheLRU(['max_size' => 1]);

	// マックスサイズは1
	$this->assertEquals($cache->max_size, 1);

	$cache->set('hoge', 111); // 1 key:hoge, value:111をset
	$cache->set('fuga', 222); // 2 key:fuga, value:222をset

	$result = $cache->get('fuga');
	$this->assertEquals($result, 222); // 一番最新のvalueは222のはず

	$result = $cache->get('hoge');
	$this->assertNull($result); // 古いものは値がnullになる
  }

}
