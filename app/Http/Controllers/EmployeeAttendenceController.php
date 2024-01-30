<?php

namespace App\Http\Controllers;

use App\Models\EmployeeAttendence;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeAttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $totalemp = Employee::count(); // Get the total count of all employees
        $allemp = Employee::paginate(10); // Paginate the employee list

        $data = [
            'allemp' => $allemp,
            'countEmp' => $totalemp,
        ];
        return view('admin.employee.employee-attendence', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'empStatus' => 'required',
            'empId' => 'required|array|min:1', // Ensure at least one checkbox is checked
        ]);

        $todayDate = now()->toDateString(); // Get the current date

        foreach ($request->post('empId') as $empId) {
            // Check if the employee attendance for today already exists
            $existingRecord = EmployeeAttendence::where('empId', $empId)
                ->whereDate('presentDate', $todayDate)
                ->first();

            if (!$existingRecord) {
                // Employee attendance does not exist for today, insert a new record
                $presentEmp = new EmployeeAttendence([
                    'empStatus' => $validatedData['empStatus'],
                    'empId' => $empId,
                ]);
                $presentEmp->save();
            } else {
                // Employee attendance already exists for today
                return redirect('employee-attendece')->with('error', 'Employee attendance already exists for today');
            }
        }

        return redirect('employee-attendece')->with('success', 'Employee attendance added successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeAttendence  $employeeAttendence
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeAttendence $employeeAttendence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeAttendence  $employeeAttendence
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeAttendence $employeeAttendence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeAttendence  $employeeAttendence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeAttendence $employeeAttendence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeAttendence  $employeeAttendence
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeAttendence $employeeAttendence)
    {
        //
    }
}
