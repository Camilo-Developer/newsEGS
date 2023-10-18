<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Dashboard\DashboardsController;
use App\Http\Controllers\Admin\Categories\CategoriesController;
use App\Http\Controllers\Admin\States\StatesController;
use App\Http\Controllers\Admin\SocialNetworks\SocialNetworksController;
use App\Http\Controllers\Admin\Roles\RolesController;
use App\Http\Controllers\Admin\Users\UsersController;
use App\Http\Controllers\Admin\News\NewsController;


Route::get('/dashboard',[DashboardsController::class,'index'])->name('admin.dashboard');

Route::resource('/categories', CategoriesController::class)->names('admin.categories');
Route::resource('/states', StatesController::class)->names('admin.states');
Route::resource('/socialnetworks', SocialNetworksController::class)->names('admin.socialnetworks');
Route::resource('roles',RolesController::class)->names('admin.roles');
Route::resource('/users',UsersController::class)->names('admin.users');
Route::resource('/news',NewsController::class)->names('admin.news');
