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
      $table->string("address", 255);
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
        "address" =>
          "Don Apolinar Velez Street, Cagayan de Oro, Misamis Oriental",
        "phone_number" => "0998292809",
        "owner_id" => 1,
      ],
      [
        "name" => "McDonald's",
        "address" => "J.R. Borja St, Cagayan de Oro, Misamis Oriental",
        "phone_number" => "0992789163",
        "owner_id" => 2,
      ],
      [
        "name" => "Panagatan",
        "address" => "Panagatan, Zone 3, Opol, Misamis Oriental",
        "phone_number" => "0982791738",
        "owner_id" => 3,
      ],
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
