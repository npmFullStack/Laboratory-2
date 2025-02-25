<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create("inspections", function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger("inspector_id");
      $table->unsignedBigInteger("restaurant_id");
      $table->unsignedBigInteger("violation_id");
      $table->time("time");
      $table->date("date");

      $table->timestamps();
      $table
        ->foreign("inspector_id")
        ->references("id")
        ->on("inspectors")
        ->onDelete("cascade")
        ->onUpdate("cascade");
      $table
        ->foreign("restaurant_id")
        ->references("id")
        ->on("restaurants")
        ->onDelete("cascade")
        ->onUpdate("cascade");
      $table
        ->foreign("violation_id")
        ->references("id")
        ->on("violations")
        ->onDelete("cascade")
        ->onUpdate("cascade");
    });

DB::table("inspections")->insert([
  [
    "inspector_id" => 1,
    "restaurant_id" => 1,
    "violation_id" => 1,
    "time" => "10:00:00",
    "date" => "2025-02-25"
  ],
  [
    "inspector_id" => 2,
    "restaurant_id" => 2,
    "violation_id" => 2,
    "time" => "11:00:00",
    "date" => "2025-02-25"
  ],
  [
    "inspector_id" => 3,
    "restaurant_id" => 3,
    "violation_id" => 3,
    "time" => "12:00:00",
    "date" => "2025-02-25"
  ],
]);

}
  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("inspections");
  }
};
