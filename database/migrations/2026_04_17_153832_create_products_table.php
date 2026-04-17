<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->decimal('price')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('locale')->index();
            $table->unique(['product_id', 'locale']);
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_translations');
        Schema::dropIfExists('products');
    }
};
