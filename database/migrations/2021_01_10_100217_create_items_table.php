<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('name_mm')->nullable();;
            $table->unsignedBigInteger('item_category_id');
            $table->unsignedBigInteger('item_sub_category_id');
            $table->integer('normal_quantity')->default(1);
            $table->decimal('normal_price', 16, 2);
            $table->integer('special_quantity')->nullable();;
            $table->decimal('special_price')->nullable();;
            $table->boolean('is_apply_special')->default(0);
            $table->boolean('is_single_discount')->default(0);
            $table->decimal('single_discount_percent', 16, 2)->nullable();
            $table->longText('cover')->nullable();;
            $table->longText('description')->nullable();;
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('item_category_id')->references('id')->on('item_categories')->onDelete('restrict');
            $table->foreign('item_sub_category_id')->references('id')->on('item_sub_categories')->onDelete('restrict');
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
        Schema::dropIfExists('items');
        Schema::enableForeignKeyConstraints();
    }
}
