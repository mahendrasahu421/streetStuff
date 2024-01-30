<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'new-designation';
        $tittle = 'New Designation';
        $btnName = 'Create New';
        $data = compact('url', 'tittle', 'btnName'); // Corrected the spelling of 'compact'
        return view('admin.employee.designation')->with($data); // Passed $data to the with() method
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
        $validated = $request->validate([
            'designation' => 'required|',
            'status' => 'required'
        ]);

        if ($validated != "") {
            $designation = new Designation();
            $designation->designation = $request->input('designation');
            $designation->status = $request->input('status');
            $designation->save();


            return redirect('designation-list')->with('success', 'Designation created successfully');
        } else {
            // Validation failed, handle accordingly
            return redirect()->back()->withErrors($validated)->withInput();
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $designations = Designation::paginate(10);
        $data = compact('designations'); // Use 'designations' instead of $designation
        return view('admin.employee.designation-list', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {

        $decodedId = base64_decode($id);
        $designation = Designation::find($decodedId);
        if (is_null($designation)) {
            return view('admin.employee.designation');
        } else {
            $url = 'update-designation' . '/' . $id;
            $tittle = 'Edit Designation';
            $btnName = 'Update Designation';
            $data = compact('url', 'tittle', 'btnName', 'designation');
            return view('admin.employee.designation')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $decodeId = base64_decode($id);
        $designation = Designation::find($decodeId);

        if ($designation!="") {
            $designation->designation = $request->post('designation');
            $designation->status = $request->post('status');
            $designation->save();

            // You might want to redirect or perform other actions after updating the designation
            return redirect('designation-list')->with('success','Update SucccessFully');
        } else {
            // Handle the case where the designation is not found
            return response()->view('admin.employee.designation', [], 404);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Designation $designation)
    {
        //
    }
}
