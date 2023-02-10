<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class login_page_route extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
     public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
