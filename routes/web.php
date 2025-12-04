<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnCallback;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('Employee')->controller(EmployeeController::class)->group(function() {
    Route::get('/','index')->name('index');
});

// Route::get('addemp',[EmployeeController::class,'addemp']);

// Route::get('getemp',[EmployeeController::class,'getemp']);
// Route::get('softdel',[EmployeeController::class,'softdel']);

