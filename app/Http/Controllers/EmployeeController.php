<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'new-employee';
        $tittle = 'New Employee';
        $method = 'post';
        $btnName = 'Create Employee';
        $detais = 'Employee Details';
        $designation = Designation::all();
        $data = compact('designation', 'url', 'method', 'tittle', 'btnName', 'detais');
        return view('admin.employee.new-employee')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function employee_list()
    {
        return view('admin.employee.employee-list');
    }

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
        try {
            // Validation rules
            $validatedData = $request->validate([
                'name' => 'required',
                'age' => 'required|numeric',
                'email' => 'required|email',
                'contect_number' => 'required',
                'sallry' => 'required',
                'address' => 'required',
                'id_proof' => 'required|file|mimes:pdf,doc,docx|max:2048', // Adjust the max size as needed
                'designation_id' => 'required',
                'status' => 'required',
            ]);

            // Check if email or contact_number already exists
            $existingEmployeeByEmail = Employee::where('email', $validatedData['email'])->first();
            $existingEmployeeByContactNumber = Employee::where('contect_number', $validatedData['contect_number'])->first();

            if ($existingEmployeeByEmail || $existingEmployeeByContactNumber) {
                // Email or contact number already exists, redirect back with an error message
                return redirect()->back()->with('error', 'Email or Contact Number already exists');
            }

            // Handle file upload
            $idProofPath = $request->file('id_proof')->store('id_proofs');

            // Create a new Employee instance and fill it with the validated data
            $employee = new Employee([
                'name' => $validatedData['name'],
                'age' => $validatedData['age'],
                'email' => $validatedData['email'],
                'contect_number' => $validatedData['contect_number'],
                'sallry' => $validatedData['sallry'],
                'address' => $validatedData['address'],
                'id_proof' => $idProofPath,
                'designation_id' => $validatedData['designation_id'],
                'status' => $validatedData['status'],
            ]);

            // Save the employee record to the database
            $employee->save();

            // Optionally, you can redirect the user to a success page or perform additional actions
            return redirect('employee.list')->with('success', 'Employee added successfully');
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            exit;
            return redirect()->back()->with('error', 'An error occurred. Please try again.')->withInput();
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $search = $request->input('search');

        $allemp = Employee::when($search, function ($query) use ($search) {
          
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%');
        })->paginate(10);

        return view('admin.employee.employee-list', compact('allemp', 'search'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($encodedId)
    {
        $id = base64_decode($encodedId);
        $url = 'update-employee-details/' . $encodedId;
        $method = 'get';
        $tittle = 'Edit Employee';
        $btnName = 'Edit Employee';
        $detais = 'Edit Employee Details';

        // Fetch the employee and designation data
        $employee = DB::table('employees')->where('id', $id)->first();
        $designation = Designation::all();

        if ($employee) {
            return view('admin.employee.new-employee', compact('employee', 'designation', 'method', 'url', 'tittle', 'btnName', 'detais'));
        } else {
            return redirect()->route('employee.index')->with('error', 'Employee not found');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $encodedId)
    {
        $id = base64_decode($encodedId);

        // Validation rules
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'contect_number' => 'required',
            'sallry' => 'required',
            'address' => 'required',
            'id_proof' => 'file|mimes:pdf,doc,docx',
            'designation_id' => 'required',
            'status' => 'required',
        ]);

        // Find the employee record
        $employee = Employee::find($id);

        // Check if the employee exists
        if (!$employee) {
            return redirect()->route('employee.index')->with('error', 'Employee not found');
        }

        // Update the employee record with the new data
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'email' => 'required|email',
            'contect_number' => 'required',
            'sallry' => 'required',
            'address' => 'required',
            'id_proof' => 'nullable|file|mimes:pdf,doc,docx',
            'designation_id' => 'required',
            'status' => 'required',
        ]);

        // Handle file upload
        if ($request->hasFile('id_proof')) {
            $idProofPath = $request->file('id_proof')->store('id_proofs');
            $employee->update(['id_proof' => $idProofPath]);
        }

        // Optionally, you can redirect the user to a success page or perform additional actions
        return redirect('employee-list')->with('success', 'Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}