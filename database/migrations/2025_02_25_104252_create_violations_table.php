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
    Schema::create("violations", function (Blueprint $table) {
      $table->id();
      $table->string("descr", 45);
      $table->string("penalty_points", 45);
      $table->string("health_grade", 45);
      $table->timestamps();
    });

    DB::table("violations")->insert([
      [
        "descr" => "No Hairnet",
        "penalty_points" => "120",
        "health_grade" => "C",
      ],
      [
        "descr" => "No Violation",
        "penalty_points" => "0",
        "health_grade" => "A",
      ],
      [
        "descr" => "No Facemask",
        "penalty_points" => "80",
        "health_grade" => "B",
      ],
    ]);
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("violations");
  }
};
