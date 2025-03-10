<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\RestaurantMenuController;
use Illuminate\Support\Facades\Route;


// landing page
Route::get('/', [LandingpageController::class, 'index'])->name('LandingIndex');
Route::get('/team', [LandingpageController::class, 'team'])->name("landing.team");
Route::get('/about', [LandingpageController::class, 'about'])->name("landing.about");

// restaurant menu
Route::get("/menu", [RestaurantMenuController::class, 'passMenu'])->name("restaurant");
// customer pass and post
Route::get("/menu/cust-fill/{orderId}", [RestaurantMenuController::class, "passCust"])->name("restaurant.cust");
Route::post("/menu/cust-fill/{orderId}", [RestaurantMenuController::class, "postCust"])->name("restaurant.cust.post");
// item pass and post
Route::get("/menu/{id}/{name?}", [RestaurantMenuController::class, 'menuDetail'])->name("restaurant.item");
Route::post("/menu/cust/{ids}", [RestaurantMenuController::class, "custDetail"])->name("restaurant.item.pass");


Route::get("/dashboard", [App\Http\Controllers\OrderDoneController::class, "orderDone"])->name("dashboard");
// dashboard list
Route::get("/dashboard/list", [App\Http\Controllers\OrderListController::class, "orderList"])->name("dashboard.list");
Route::post("/dashboard/list", [App\Http\Controllers\OrderListController::class, "update"])->name("dashboard.list.update");
// dashboard list update
Route::get("/dashboard/order_history", [App\Http\Controllers\OrderHistoryController::class, "order_history"])->name("dashboard.history");
Route::get("/dashboard/menu", [App\Http\Controllers\MenuController::class, "menu"])->name("dashboard.menu");
// dashboard create
Route::get("/dashboard/menu/store", [App\Http\Controllers\MenuEditController::class, "giveStorePage"])->name("dashboard.menu.store");
Route::post("/dashboard/menu/store", [App\Http\Controllers\MenuEditController::class, "store"])->name("dashboard.menu.store.store");
// dashboard edit
Route::get("/dashboard/menu/edit", [App\Http\Controllers\MenuEditController::class, "passData"])->name("dashboard.menu.edit");
Route::post("/dashboard/menu/edit", [App\Http\Controllers\MenuEditController::class, "edit"])->name("dashboard.menu.edit.store");
// dashboard delete
Route::get("/dashboard/menu/delete", [App\Http\Controllers\MenuEditController::class, "passDataDelete"])->name("dashboard.menu.delete");
Route::post("/dashboard/menu/delete", [App\Http\Controllers\MenuEditController::class, "delete"])->name("dashboard.menu.delete.delete");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
