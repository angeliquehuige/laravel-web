<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class DatabaseTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLoginAccount()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'docent@hz.nl'
        ]);
    }
}
