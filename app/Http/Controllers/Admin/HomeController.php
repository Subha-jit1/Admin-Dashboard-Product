<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Inertia\Inertia;

class HomeController extends Controller
{  
    public function dashboard(Request $request)
    {     
        return Inertia::render('Admin/Home/Dashboard');
    }

}
 