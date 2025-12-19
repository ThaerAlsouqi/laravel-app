<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeAddRequest;
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
    public function index(Request $request)
    {
        $employees = Employee::when($request->search, function ($query) use ($request) {
            return $query->whereAny([
                'id',
                'first_name',
                'last_name',
            ], 'like', '%' . $request->search . '%');
        })->paginate(10);


        return view('Employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeAddRequest $request)
    {
        // $request->validate([
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'salary' => 'required|integer|min:450',
        // ],[ // when u want a specific message 
        //     'first_name.required' => 'plaese enter a first_name'
        // ]);

        $employee = new Employee();

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect('employee');
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

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('Employees.edit', compact('employee'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->update();

        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,$id)
    {
        $employee=Employee::findOrFail($id)->delete();

        return redirect('employee');
    }
}
