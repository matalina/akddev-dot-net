<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisplayProjectTest extends TestCase
{
    /** @test */
    public function display_project_test()
    {
        $response = $this->get('/project/test');

        $response->assertStatus(200);
    }
}
