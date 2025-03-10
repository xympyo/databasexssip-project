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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId("food_id")->nullable()->index("fk_menu_to_order");
            $table->foreignId("customer_id")->nullable()->index("fk_customer_to_order");
            $table->foreignId("status_id")->nullable()->index("fk_order_to_order_status");
            $table->string("cust_name")->nullable();
            $table->integer("customer_table")->nullable();
            $table->string("cust_food_name")->nullable();
            $table->double("cust_price")->nullable();
            $table->integer("cust_quantity")->nullable();
            $table->double("cust_total")->nullable();
            $table->string("cust_status")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
