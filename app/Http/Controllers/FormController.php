<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(Request $request) {
        if(\View::exists('main')) {
            if(isset($request)) {
                dd($request);
            }
        }
        abort(404);
    }
}
