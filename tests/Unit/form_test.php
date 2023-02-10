<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class form_test extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
{
    $this->visit('/login')
         ->type('email', 'password')
         ->check('terms')
         ->press('login')
         ->seePageIs('/dashboard');
}
}
