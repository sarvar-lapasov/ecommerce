<?php

namespace Tests\Feature;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\StockResource;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function test_can_get_product():void
    {
       $response = $this->get('api/products');

       $response->assertStatus(200);
    }

}
