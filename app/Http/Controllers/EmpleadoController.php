<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class EmpleadoController extends Controller
{
    function index() {
        $empleados = DB::table("employees")->get();
        return view('empleados', compact('empleados'));
    }
}