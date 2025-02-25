<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get("/", function () {
  return view("welcome");
});

Route::get("/v1/level1", [AdminController::class, "level1"]);

Route::get("/v1/level2", [AdminController::class, "level2"]);

Route::get("/v1/level3", [AdminController::class, "level3"]);

Route::get("/v1/level4", [AdminController::class, "level4"]);