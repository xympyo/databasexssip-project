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
        Schema::table("detail_order", function (Blueprint $table) {
            // detail_order to order
            $table->foreign("order_id", "fk_detail_order_to_order")->references("id")->on("order")->onDelete("set null");
            // detail_order to menu
            $table->foreign("food_id", "fk_detail_order_to_menu")->references("id")->on("menu")->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("detail_order", function (Blueprint $table) {
            $table->dropForeign("fk_detail_order_to_order");
            $table->dropForeign("fk_detail_order_to_menu");
        });
    }
};
