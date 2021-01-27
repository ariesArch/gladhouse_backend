<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_category_id')->nullable();
            $table->string('name')->unique();
            $table->string('name_mm')->unique()->nullable();
            $table->boolean('is_discount')->default(0);
            $table->longText('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('item_category_id')->references('id')->on('item_categories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('item_sub_categories');
        Schema::enableForeignKeyConstraints();
    }
}
