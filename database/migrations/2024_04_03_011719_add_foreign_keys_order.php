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
        Schema::table("order", function (Blueprint $table) {
            // foreign key from menu to order for food_id
            $table->foreign("food_id", "fk_menu_to_order")->references("id")->on("menu")->onUpdate("set null")->onDelete("set null");
            // foreign key from customer to order for customer_id
            $table->foreign("customer_id", "fk_customer_to_order")->references("id")->on("customer")->onDelete("CASCADE")->onUpdate("CASCADE");
            // foreign key from order to order_status
            $table->foreign("status_id", "fk_order_to_order_status")->references("id")->on("order_status")->onDelete("set null")->onUpdate("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop fk_cust_name
        Schema::table("order", function (Blueprint $table) {
            $table->dropForeign("fk_menu_to_order");
            $table->dropForeign("fk_customer_to_order");
            $table->dropForeign("fk_order_to_order_status");
        });
    }
};
