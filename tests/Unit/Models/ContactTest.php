<?php

namespace Tests\Unit\Models;

use App\Models\Contact;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A instance test.
     */
    public function test_instance(): void
    {
        $instance = new Contact();
        $this->assertInstanceOf(Contact::class, $instance);
    }
}
