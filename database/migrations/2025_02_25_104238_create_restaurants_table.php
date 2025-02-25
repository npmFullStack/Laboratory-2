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
    Schema::create("restaurants", function (Blueprint $table) {
      $table->id();
      $table->string("name", 45);
      $table->string("address", 45);
      $table->string("phone_number", 15);


      $table->unsignedBigInteger("owner_id");
      $table->timestamps();

      $table
        ->foreign("owner_id")
        ->references("id")
        ->on("owners")
        ->onDelete("cascade")
        ->onUpdate("cascade");
    });

    DB::table("restaurants")->insert([
  [
    "name" => "Jollibee",
    "address" => "City Mall Iponan",
    "phone_number" => "1234567890",
    "owner_id" => 1,
  ],
  [
    "name" => "Chowking",
    "address" => "City Mall Iponan",
    "phone_number" => "2345678901",
    "owner_id" => 2,
  ],
  [
    "name" => "Mang Inasal",
    "address" => "City Mall Iponan",
    "phone_number" => "3456789012",
    "owner_id" => 3,
  ]
]);

  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists("restaurants");
  }
};
