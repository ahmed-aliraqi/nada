<?php

namespace Tests\Feature\Api;

use App\Models\Category;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_list_all_categories()
    {
        $this->actingAsAdmin();

        Category::factory()->count(2)->create();

        $this->getJson(route('api.categories.index'))
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

    public function test_categories_select2_api()
    {
        Category::factory()->count(5)->create();

        $response = $this->getJson(route('api.categories.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.categories.select', ['selected_id' => 4]))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 4);

        $this->assertCount(5, $response->json('data'));
    }

    public function test_it_can_display_the_visitor_details()
    {
        $this->actingAsAdmin();

        $Category = Category::factory(RuleFactory::make(['%name%' => 'Foo']))->create();

        $response = $this->getJson(route('api.categories.show', $Category))
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
