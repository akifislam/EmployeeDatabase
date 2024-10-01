<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(20);

        return view('index')
            ->with('employees',$employees);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('newbook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Validate
        $request->validate([
            'name' => 'required|max:255|string|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'mobile_no' => 'required|numeric',
            'job_title' => 'required',
            'salary' => 'required|numeric',
            'address' => 'required',
            'joining_date' => 'required|date',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile_no = $request->mobile_no;
        $employee->job_title = $request->job_title;
        $employee->salary = $request->salary;
        $employee->address = $request->address;
        $employee->joining_date = $request->joining_date;
        
        $employee->save();

        return redirect()->route('employee.show',$employee->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($eid)
    {
        $employee = Employee::find($eid);

        return view('show')
            ->with('employee',$employee);
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
    public function destroy(Request $request,$id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index');

    }
}
