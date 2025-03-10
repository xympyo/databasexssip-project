<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_history', function (Blueprint $table) {
            $table->id();
            // $table->integer("customer_id")->nullable();
            $table->foreignId("customer_id")->nullable()->index("fk_customer_to_order_history");
            // $table->integer("order_id")->nullable();
            $table->foreignId("order_id")->nullable()->index("fk_order_to_order_history");
            // $table->integer("experience_id")->nullable();
            $table->foreignId("experience_id")->nullable()->index("fk_experience_to_order_history");
            $table->string("order_name")->nullable();
            $table->string("order_food_name")->nullable();
            $table->double("order_price")->nullable();
            $table->integer("order_quantity")->nullable();
            $table->double("order_total")->nullable();
            $table->double("order_rating")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_history');
    }
};
