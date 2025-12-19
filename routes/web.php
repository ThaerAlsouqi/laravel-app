<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnCallback;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('employee')->controller(EmployeeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('create', 'create')->name('create');
    Route::post('store','store');
    Route::get('edit/{id}','edit');
    Route::post('update/{id}','update');
    Route::delete('delete/{id}','destroy');
});

// Route::get('addemp',[EmployeeController::class,'addemp']);

// Route::get('getemp',[EmployeeController::class,'getemp']);
// Route::get('softdel',[EmployeeController::class,'softdel']);
