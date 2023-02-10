<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class upload_picture_test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testPhotoCanBeUploaded()
{
    $this->visit('/upload')
         ->attach($pathToFile, 'photo')
         ->press('Upload')
         ->see('Upload Successful!');
}
}
