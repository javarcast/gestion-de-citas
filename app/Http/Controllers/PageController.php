<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Patient;
use App\Models\User;
use App\Models\Treatment;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function dashboard(){

        $nPatients = Patient::count();
        $nDentists = User::Where('rol_id', '=', "2")
        ->count();
        return Inertia::render('Dashboard',compact("nPatients","nDentists"));

    }

    public function calculator(){

        $treatments = Treatment::all();
        return Inertia::render('Calculator/Index', compact('treatments'));
    }
}
