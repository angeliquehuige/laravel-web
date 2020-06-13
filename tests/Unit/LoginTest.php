<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{

    /**
     * Ensures that the login page works correctly.
     * The user can only login with the given email address and password by the administrator,
     * and not change it by requesting a password change or registering a new account.
     */
    public function testLoginWithGivenAccount()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertDontSee('Forgot Your Password?', 'forgot your password?', 'Forgot your password?');
        $response->assertDontSee('Register', 'register');
    }
}
