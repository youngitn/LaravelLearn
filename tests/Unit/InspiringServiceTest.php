<?php

namespace Tests\Unit;

use App\Services\InspiringService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InspiringServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //just make sure will return at least a string.
        self::assertIsString(
            (new InspiringService())->inspire()
        );
    }
}
