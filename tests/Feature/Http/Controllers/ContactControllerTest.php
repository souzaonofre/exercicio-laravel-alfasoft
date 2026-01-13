<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    /**
     * A Contact dasboard http test.
     */
    public function test_contact_dashboard(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
