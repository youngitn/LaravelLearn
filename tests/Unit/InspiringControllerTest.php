<?php

namespace Tests\Unit;

use App\Http\Controllers\InspiringController;
use App\Services\InspiringService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InspiringControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testInspire()
    {

        //$mock 這個物件就成功的作為 InspiringService 的 mock 視為InspiringService子物件囉

        $mock = \Mockery::mock(InspiringService::class);
        //宣告 InspiringController 時，不是使用 InspiringService，而是繼承 InspiringService 的 $mock 物件
        $inspiringController =
            new InspiringController(
                    //$mock 會預期被呼叫 inspire()，然後回傳「名言」 就是限制一定回傳'名言'字串
                    //子物件覆寫inspire() 只回傳'名言'
                    $mock->shouldReceive('inspire')->andReturn('名言')
                );
        //然後我們斷言 InspiringController->inspire() 的回傳，應該會等同 $mock 的回傳：
        self::assertEquals(
            '名言',
            $inspiringController->inspire()
        );
    }
}
