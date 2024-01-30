<?php

namespace App\Http\Controllers;

use App\Models\CreateCategory;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'Create Menu';
        $detais = 'Create Menu';
        $url = 'create-Menu';
        $method = 'post';
        $btnName = 'Create New';
        $data = compact('tittle','detais','url','method','btnName');
      return view('menu.create-menu')->with($data);
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
     * @param  \App\Models\CreateCategory  $createCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CreateCategory $createCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateCategory  $createCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateCategory $createCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateCategory  $createCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateCategory $createCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateCategory  $createCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateCategory $createCategory)
    {
        //
    }
}
