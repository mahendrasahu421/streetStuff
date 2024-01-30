<?php

namespace App\Http\Controllers;

use App\Models\EmployeeLeaves;
use App\Models\EmployeeAttendence;
use Illuminate\Http\Request;

class EmployeeLeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = EmployeeAttendence::with('employee');

        // Filter by Name or ID
        if ($request->has('search')) {
            $query->whereHas('employee', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->input('search') . '%')
                    ->orWhere('id', $request->input('search'));
            });
        }

        // Filter by Present or Absent
        if ($request->has('empStatus') && in_array($request->input('empStatus'), ['P', 'A'])) {
            $query->where('empStatus', $request->input('empStatus'));
        }

        // Filter by From Date
        if ($request->has('fromDate')) {
            $query->whereDate('created_at', '>=', $request->input('fromDate'));
        }

        // Filter by To Date
        if ($request->has('toDate')) {
            $query->whereDate('created_at', '<=', $request->input('toDate'));
        }

        $empLeaves = $query->paginate(10);

        $data['empLeaves'] = $empLeaves;

        return view('admin.employee.employee-leaves', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeLeaves  $employeeLeaves
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeLeaves $employeeLeaves)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeLeaves  $employeeLeaves
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeLeaves $employeeLeaves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeLeaves  $employeeLeaves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeLeaves $employeeLeaves)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeLeaves  $employeeLeaves
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeLeaves $employeeLeaves)
    {
        //
    }
}
