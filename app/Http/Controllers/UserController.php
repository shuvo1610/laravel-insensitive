<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $result = Str::containsInSensitive('Hi, He is Hardik', 'hardik');
        $result2 = Str::containsInSensitive('Hi, He is Hardik', 'Hardik');

        dd($result,$result2);
    }
}
