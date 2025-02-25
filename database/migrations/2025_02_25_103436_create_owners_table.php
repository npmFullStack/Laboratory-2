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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string("name", 45);
            $table->string("contact_phone", 45);
            $table->timestamps();
        });
        
        DB::table("owners")->insert([
          [
            "name" => "Norway P. Mangorangca",
            "contact_phone" => "09092222612"
            ],
            [
                          "name" => "Gabriel B. Mendoza",
            "contact_phone" => "09092222613"
              ],
                          [
                          "name" => "Dave Joseph S. Baa",
            "contact_phone" => "09092222614"
              ]
            
          ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
