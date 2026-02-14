<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register Create form
Route::get('/register', [UserController::class,'create'])->middleware('guest');

// Create New user
Route::post('/users', [UserController::class,'store']);

// Logout user
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

// Show Login form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class,'authenticate']);







// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listign
// destroy - Delete listing