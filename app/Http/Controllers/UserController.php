<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function about()
    {
        return view('users.about');
    }

    public function menu()
    {
        return view('users.menu');
    }

    public function gallery()
    {
        return view('users.gallery');
    }

    public function cart()
    {
        return view('users.cart');
    }

    public function shipping()
    {
        return view('users.shipping');
    }

    public function reservation()
    {
        return view('users.reservation');
    }

    public function payment()
    {
        return view('users.payment');
    }

    public function confirmation()
    {
        return view('users.confirmation');
    }

    public function blog()
    {
        return view('users.blog');
    }

    public function blog_single()
    {
        return view('users.blog-single');
    }
    public function contact()
    {
        return view('users.contact');
    }


}
