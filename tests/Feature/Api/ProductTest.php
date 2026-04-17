<?php

namespace Tests\Feature\Api;

use App\Models\Product;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_list_allproducts()
    {
        $this->actingAsAdmin();

        Product::query()->truncate();

        Product::factory()->count(2)->create();

        $this->getJson(route('api.products.index'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'name',
                    ],
                ],
            ]);
    }

    public function testproductsselect2_api()
    {
        Product::query()->truncate();

        Product::factory()->count(5)->create();

        $response = $this->getJson(route('api.products.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.products.select', ['selected_id' => 4]))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 4);

        $this->assertCount(5, $response->json('data'));
    }

    public function test_it_can_display_theproductdetails()
    {
        $this->actingAsAdmin();

        $Product = Product::factory(RuleFactory::make(['%name%' => 'Foo']))->create();

        $response = $this->getJson(route('api.products.show', $Product))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'name',
                ],
            ]);

        $this->assertEquals($response->json('data.name'), 'Foo');
    }
}
