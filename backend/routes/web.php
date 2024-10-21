<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamilyController;

Route::get("/", [FamilyController::class, "index"])->name("home");
Route::get("/families/characters", [FamilyController::class, "table"])->name("families.table");
Route::get("/families/{slug}/{id}", [FamilyController::class, "show"])->name("families.show");
Route::get("/families/{slug}", [FamilyController::class, "list"])->name("families.list");