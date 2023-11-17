<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_it_return_odd()
    {
        $response = $this->get('/api/test/1');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Number is odd'
            ]);
    }

    public function test_it_return_even()
    {
        $response = $this->get('/api/test/2');

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Number is even'
            ]);
    }

    public function test_it_return_error()
    {
        $response = $this->get('/api/test/');

        $response->assertStatus(404);
    }

    public function test_it_return_error_if_string()
    {
        $response = $this->get('/api/test/sdf');

        $response->assertStatus(422);
    }
}
