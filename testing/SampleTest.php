<?php
/**
 * データ一覧取得UnitTest
 * Date: 2016/08/06
 * @author muramoya
 * @version: 1.0
 */

namespace Sample\UnitTest;


use KTR\DataBase\Seeder;
use KTRLib\UnitTestCase;

class SampleTest extends UnitTestCase
{
    public static function setUpBeforeClass()
    {
        //DBへのシード。引数にクラス名を指定するとdatabase/seeds以下の該当クラスのみ実行
        $seeder = new Seeder('SampleSeed,Sample2Seed');
        $seeder->run();
    }

    public function testSample()
    {
        $this->assertTrue(true);
    }

 }