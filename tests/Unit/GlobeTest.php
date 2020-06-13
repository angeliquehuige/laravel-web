<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GlobeTest extends TestCase
{
    /**
     * Ensures that the globe page can always be accessed without authorization
     *
     */
    public function testGlobePublicAccessibility()
    {
        $response = $this->get('/globe');
        $response->assertStatus(200);
    }
}
