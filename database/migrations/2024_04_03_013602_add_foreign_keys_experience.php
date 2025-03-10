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
        Schema::table("experience", function (Blueprint $table) {
            $table->foreign("experience_id", "fk_order_to_experience")->references("id")->on("order")->onDelete("cascade")->onUpdate("set null");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("experience", function (Blueprint $table) {
            $table->dropForeign("fk_order_to_experience");
        });
    }
};
