<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       $pagetitle = 'profile';

       return view('profile', ['pagetitle' => $pagetitle]);
    }
}
