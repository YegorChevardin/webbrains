<?php

namespace App\Http\Controllers;

use App\Mail\MakeOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    function index(Request $request) {
        if(\View::exists('main')) {
            if(isset($request)) {
                if($request->input("Submit") == "Make an order") {
                    $data = [
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'text' => $request->input('text'),
                        'number' => $request->input('number')
                    ];

                    Mail::to('webbrainscompany@gmail.com')->send(new MakeOrder($data));

                    return back();
                } elseif ($request->input("Submit") == "Rate us") {
                    echo "Hello world!";
                }
            }
        }
        abort(404);
    }
}
