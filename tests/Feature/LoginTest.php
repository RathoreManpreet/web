<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * test that admin login url is exist or not
     *
     * @return void
     */
    public function testtoCheckAdminLoginUrlIsEist()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    /**
     * test incorrect login credentials
     *
     * @return void
     */
    public function testEnterIncorrectData()
    {
        $user = User::factory()->create();
        
        $response = $this->call('POST', '/admin/signin', [
            'email' => '',
            'password' => '',
            '_token' => csrf_token()
        ]);
  
        $this->assertNotEquals(200, $response->getStatusCode());

        $response = $this->call('POST', '/admin/signin', [
            'email' => 'test@gmail.com',
            'password' => '123',
            '_token' => csrf_token()
        ]);
        $this->assertEquals(422, $response->decodeResponseJson()['status']);

    }

    /**
     * test correct login credentials
     *
     * @return void
     */
    public function testEnterCorrectData()
    {
        $user = User::factory()->create();
        
        $response = $this->call('POST', '/admin/signin', [
            'email' => $user->email,
            'password' => '123456',
            '_token' => csrf_token()
        ]);
  
        $this->assertEquals(200, $response->getStatusCode());

      

    }
}
