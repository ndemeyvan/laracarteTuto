<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

// ./vendor/bin/phpunit
class HelpersTest extends TestCase
{
    /**
     * @test
     *
     * @return void
     */
    public function pageTitleShouldReturnGoodTitle()
    {
       
        $this->assertEquals( page_title("lolipop"), page_title("lolipop"));
    }
}
