<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class EmployeeController extends Controller
{
    // public function addemp()
    // {
    //     $emp = new Employee();
    //     $emp -> first_name='Thaer';
    //     $emp -> last_name='Alsouqi'; 
    //     $emp -> salary=5000;
    //     $emp->save();
    //     return 'success!';
    // }
    // public function getemp()
    // {
    //     $emp=Employee::all();

    //     return $emp;
    // }

    // public function softdel()
    // {
    //     // return Employee::find(2)->delete();

    //     // $emp = Employee::withTrashed()->get();

    //     // $emp = Employee::onlyTrashed()->get();


    // }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('Employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
