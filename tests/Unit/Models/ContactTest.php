<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Contact;
use Illuminate\Support\Arr;
use Illuminate\Foundation\Testing\WithFaker;

class ContactTest extends TestCase
{
    /**
     * A instance test.
     */
    public function test_instance(): void
    {
        $instance = new Contact();
        $this->assertInstanceOf(Contact::class, $instance);

        $table = $instance->getTable();
        $this->assertTrue($table == 'contacts', '# Check if instance has correct table name');
        
        $schBuilder = $instance->getConnection()->getSchemaBuilder();

        $columns = $schBuilder->getColumns($table);

        $this->assertIsArray($columns, '# Check if is valid array');
        $this->assertGreaterThan(3, count($columns), '# Check if array has more of three elements');

        $columnsName = Arr::pluck($columns, 'name');

        $this->assertGreaterThan(3, count($columnsName), '# Check if collection has more of three elements');

        $this->assertTrue(in_array('name', $columnsName), '# Check if instance has "name" attribute');

        $this->assertTrue(in_array('contact', $columnsName), '# Check if instance has "contact" attribute');

        $this->assertTrue(in_array('email', $columnsName), '# Check if instance has "email" attribute');
    }
}
