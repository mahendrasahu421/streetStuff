<?php

namespace App\Http\Controllers;

use App\Models\AdvanceSalary;
use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdvanceSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $totalemp = Employee::count(); // Get the total count of all employees
        $allemp = Employee::paginate(10); // Paginate the employee list

        $data = [
            'allemp' => $allemp,
            'countEmp' => $totalemp,
        ];
        return view('admin.employee.employee-advance', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->post();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvanceSalary  $advanceSalary
     * @return \Illuminate\Http\Response
     */
    public function show(AdvanceSalary $advanceSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvanceSalary  $advanceSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvanceSalary $advanceSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvanceSalary  $advanceSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdvanceSalary $advanceSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvanceSalary  $advanceSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdvanceSalary $advanceSalary)
    {
        //
    }


    public function saveEmployeeAdvance(Request $request, $encodedId)
    {
        try {
            // Decode the encoded ID
            $employeeId = base64_decode($encodedId);

            // Get values from URL parameters
            $advancePayment = $request->input('advancePayment');

            // Create a new record in the advance_salaries table
            AdvanceSalary::create([
                'empId' => $employeeId,
                'advancePayment' => $advancePayment,
                'status' => 1, // Assuming a default status value
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            // Redirect or perform any other action as needed
            return redirect()->back()->with('success', 'Employee advance saved successfully');
        } catch (\Exception $ex) {
            echo  $ex->getMessage();
            exit;
            return redirect()->back()->with('error', $ex->getMessage())->withInput();
        }
    }
}
