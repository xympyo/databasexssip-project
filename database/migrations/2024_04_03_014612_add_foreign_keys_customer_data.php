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
        Schema::table("customer_data", function (Blueprint $table) {
            // from customer to customer_data on customer_id
            $table->foreign("customer_id", "fk_customer_to_customer_data")->references("id")->on("customer")->onDelete("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // fk customer_to_customer_data_name
        Schema::table("customer_data", function (Blueprint $table) {
            $table->dropForeign("fk_customer_to_customer_data");
        });
    }
};
