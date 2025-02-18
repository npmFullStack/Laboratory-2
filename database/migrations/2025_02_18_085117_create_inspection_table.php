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
        Schema::create('inspection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("inspector_id");
            $table->unsignedBigInteger("restaurant_id");
            $table->unsignedBigInteger("violation_id");
            $table->time("time");
            $table->date("date");
            $table->string("health_grade", 45);
            $table->foreign("inspector_id")->references("id")->on("inspector")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("restaurant_id")->references("id")->on("restaurant")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("violation_id")->references("id")->on("violation")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspection');
    }
};
