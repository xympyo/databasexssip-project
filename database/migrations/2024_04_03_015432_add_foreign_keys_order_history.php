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
        Schema::table("order_history", function (Blueprint $table) {
            // from customer to order_history
            $table->foreign("customer_id", "fk_customer_to_order_history")->references("id")->on("customer")->onDelete("set null");
            // from order to order_history
            $table->foreign("order_id", "fk_order_to_order_history")->references("id")->on("order")->onDelete("CASCADE")->onUpdate("CASCADE");
            // from experience to order_history
            $table->foreign("experience_id", "fk_experience_to_order_history")->references("id")->on("experience")->onDelete("CASCADE")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("order_history", function (Blueprint $table) {
            // drop customer_to_order_history
            $table->dropForeign("fk_customer_to_order_history");
            // drop order_to_order_history
            $table->dropForeign("fk_order_to_order_history");
            // drop experience_to_order_history
            $table->dropForeign("fk_experience_to_order_history");
        });
    }
};
