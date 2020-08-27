<?php

namespace App\Http\Controllers\Truth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentTController extends Controller
{
    
    /**
     * The user and another user can comment The truth question
     */

    public function store(Request $request)
    {
        //
    }

    /**
     * listing the comment for seeing all comment on the
     * question's post, and using ID_UT for gain the comment on just that
     * post.
     */
    public function show($id)
    {
        //
    }

    /**
     * The function for edit the comment
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * delete the comment
     */
    public function destroy($id)
    {
        //
    }
}
