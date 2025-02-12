<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// หน้า Login
Route::get('/login', [LoginController::class, 'index']);

// หน้า Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'create']);

// หน้า Home
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

// Routes สำหรับ User
Route::get('/users', [UserController::class, 'index']);   // แสดงรายการผู้ใช้ทั้งหมด
Route::get('/user/{id}', [UserController::class, 'edit']); // ดึงข้อมูลผู้ใช้ตาม ID
Route::get('/user', [UserController::class, 'show']);  // ✅ เพิ่ม GET /user ให้รองรับได้
Route::put('/user', [UserController::class, 'edit_action']); // อัปเดตข้อมูลผู้ใช้
Route::delete('/user', [UserController::class, 'delete']); // ลบผู้ใช้

// MyController
Route::get('/mycontroller/{id?}', [MyController::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [MyController::class, 'MYFUNCTION']);
