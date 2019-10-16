<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\{User, Product};
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductsTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    private function create_user($user)
    {

    }

    public function test_homepage_contains_empty_products_table()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
