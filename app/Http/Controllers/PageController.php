<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function dashboard(){

        $nPatients = DB::table('patients')->count();
        $nDentists = DB::table('users')
        ->Where('rol_id', '=', "2")
        ->count();
        return Inertia::render('Dashboard',compact("nPatients","nDentists"));

    }
}
