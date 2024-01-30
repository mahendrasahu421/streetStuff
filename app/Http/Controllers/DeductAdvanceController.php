<?php

namespace App\Http\Controllers;

use App\Models\DeductAdvance;
use App\Http\Requests\StoreDeductAdvanceRequest;
use App\Http\Requests\UpdateDeductAdvanceRequest;

class DeductAdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'Deduct Advance';
        $detais = 'Deduct Advance';
        $url = 'deductEmployeeAdvance';
        $method = 'post';
        $btnName = 'Deduct Advance';
        $data = compact('tittle','detais','url','method','btnName');
        return view('admin.employee.deduct-advance', $data);
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
     * @param  \App\Http\Requests\StoreDeductAdvanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeductAdvanceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeductAdvance  $deductAdvance
     * @return \Illuminate\Http\Response
     */
    public function show(DeductAdvance $deductAdvance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeductAdvance  $deductAdvance
     * @return \Illuminate\Http\Response
     */
    public function edit(DeductAdvance $deductAdvance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeductAdvanceRequest  $request
     * @param  \App\Models\DeductAdvance  $deductAdvance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeductAdvanceRequest $request, DeductAdvance $deductAdvance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeductAdvance  $deductAdvance
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeductAdvance $deductAdvance)
    {
        //
    }
}
