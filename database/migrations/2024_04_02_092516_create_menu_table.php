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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->nullable()->index("fk_menu_to_customer");
            $table->string("f_name")->nullable();
            $table->longText("f_description")->nullable();
            $table->double("f_price")->nullable();
            $table->double("f_rating")->nullable();
            $table->longText("f_photo")->nullable();
            $table->string("f_category")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
