<?php

namespace Tests\Unit;

use Tests\TestCase;

class TeacherTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_teacher_user_new()
    {
       
        $response=$this->post('/users',[
         'name'=>,
         'adress'=>'cuetuua',
         'email'=>'imahsg@gmail',
         'gender'=>'male',
         'nationality'=>123


        ]);

          $response->assertRedirect('/home');

        
    }
  
  
}