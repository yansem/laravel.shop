<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->text('content');
            $table->integer('price');
            $table->string('preview_image');
            $table->integer('count');
            $table->boolean('is_published')->default(true);

            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
