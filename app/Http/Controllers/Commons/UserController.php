<?php

namespace App\Http\Controllers\Commons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
        /* we using a parameter for take the id and put on the profile page. 
    on this show function
    */
    public function show($id)
    {
        //
    }

    /*
        This function will using for a moving page for edit profile
    */
    public function edit($id)
    {
        //
    }

    /*
        This is the function that using for update your profile
    */
    public function update(Request $request, $id)
    {
        //
    }


    /*
        If you wanna delete your account
    */

    public function destroy($id)
    {
        //
    }
    
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }


}
