<?php

use Illuminate\Support\Facades\Route;

// This is a homepage
    Route::view('/', 'Home');

// To The Edit Profile
    Route::view('edit', 'commons.profile-edit');
    
// To Profile
    Route::view('u', 'commons.profile');

// To List Page
    // If = login
        Route::view('l', 'commons.list-page');
    // else if = another user or not login
        // Route::view('l', 'commons.listf-guest');

// Item View : 
    // Truth's View
        Route::view('vt', 'truths.view-truth');
    // Dare's View
        Route::view('vd', 'dares.view-dare');

?>