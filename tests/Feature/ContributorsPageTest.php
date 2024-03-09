<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContributorsPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_contributors_page(): void
    {
        $response = $this->get('/contributors');

        $response->assertStatus(200);
    }
}
