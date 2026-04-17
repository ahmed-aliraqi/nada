<?php

namespace Tests\Feature\Dashboard;

use App\Models\Product;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_display_a_list_of_products()
    {
        $this->actingAsAdmin();

        Product::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.products.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    public function test_it_can_display_the_product_details()
    {
        $this->actingAsAdmin();

        $product = Product::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.products.show', $product))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    public function test_it_can_display_products_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.products.create'))
            ->assertSuccessful();
    }

    public function test_it_can_create_a_new_product()
    {
        $this->actingAsAdmin();

        $productsCount = Product::count();

        $response = $this->post(
            route('dashboard.products.store'),
            Product::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                    '%description%' => 'test description',
                    'price' => 0,
                    'active' => true,
                ])
            )
        );

        $response->assertRedirect();

        $product = Product::all()->last();

        $this->assertEquals(Product::count(), $productsCount + 1);

        $this->assertEquals($product->name, 'Foo');
    }

    public function test_it_can_display_the_products_edit_form()
    {
        $this->actingAsAdmin();

        $product = Product::factory()->create();

        $this->get(route('dashboard.products.edit', $product))
            ->assertSuccessful();
    }

    public function test_it_can_update_the_product()
    {
        $this->actingAsAdmin();

        $product = Product::factory()->create();

        $response = $this->put(
            route('dashboard.products.update', $product),
            Product::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                    '%description%' => 'test description',
                    'price' => 0,
                    'active' => true,
                ])
            )
        );

        $product->refresh();

        $response->assertRedirect();

        $this->assertEquals($product->name, 'Foo');
    }

    public function test_it_can_delete_the_product()
    {
        $this->actingAsAdmin();

        $product = Product::factory()->create();

        $productsCount = Product::count();

        $response = $this->delete(route('dashboard.products.destroy', $product));

        $response->assertRedirect();

        $this->assertEquals(Product::count(), $productsCount - 1);
    }

    public function test_it_can_display_trashed_products()
    {
        if (! $this->useSoftDeletes($model = Product::class)) {
            $this->markTestSkipped("The '$model' doesn't use soft deletes trait.");
        }

        Product::factory()->create(['deleted_at' => now(), 'name' => 'Ahmed']);

        $this->actingAsAdmin();

        $response = $this->get(route('dashboard.products.trashed'));

        $response->assertSuccessful();

        $response->assertSee('Ahmed');
    }

    public function test_it_can_display_trashed_product_details()
    {
        if (! $this->useSoftDeletes($model = Product::class)) {
            $this->markTestSkipped("The '$model' doesn't use soft deletes trait.");
        }

        $product = Product::factory()->create(['deleted_at' => now(), 'name' => 'Ahmed']);

        $this->actingAsAdmin();

        $response = $this->get(route('dashboard.products.trashed.show', $product));

        $response->assertSuccessful();

        $response->assertSee('Ahmed');
    }

    public function test_it_can_restore_deleted_product()
    {
        if (! $this->useSoftDeletes($model = Product::class)) {
            $this->markTestSkipped("The '$model' doesn't use soft deletes trait.");
        }

        $product = Product::factory()->create(['deleted_at' => now()]);

        $this->actingAsAdmin();

        $response = $this->post(route('dashboard.products.restore', $product));

        $response->assertRedirect();

        $this->assertNull($product->refresh()->deleted_at);
    }

    public function test_it_can_force_delete_product()
    {
        if (! $this->useSoftDeletes($model = Product::class)) {
            $this->markTestSkipped("The '$model' doesn't use soft deletes trait.");
        }

        $product = Product::factory()->create(['deleted_at' => now()]);

        $visitorCount = Product::withTrashed()->count();

        $this->actingAsAdmin();

        $response = $this->delete(route('dashboard.products.forceDelete', $product));

        $response->assertRedirect();

        $this->assertEquals(Product::withoutTrashed()->count(), $visitorCount - 1);
    }

    public function test_it_can_filter_products_by_name()
    {
        $this->actingAsAdmin();

        Product::factory()->create([
            'name' => 'Foo',
        ]);

        Product::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.products.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(__('products.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}