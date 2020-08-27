<?php

namespace App\Http\Controllers\Functions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TruthController extends Controller
{
    /**
     * Display a listing of the truth's resource
     * and the data arranged from your id if you wanna see your question.
     */
    public function index()
    {
        //
    }


    /**
     * store function will used for ask a question to another user
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Will bring you to the the page that can see a comment from another user
     * on that question find by id ofcrs.
     */
    public function show($id)
    {
        //
    }

    /**
     * the page will redirect to the page that like from show functions
     * but this is for change the question if the question have not answered by 
     * answerer
     */
    public function edit($id)
    {
        //
    }

    /**
     * this is the update function from the show page that for editing the question
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * remove the question.
     */
    public function destroy($id)
    {
        //
    }
}
