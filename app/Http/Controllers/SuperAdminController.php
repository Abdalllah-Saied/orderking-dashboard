<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function dashboard()
    {
        $merchants = Tenant::with('users')->get();
        return view('superadmin.dashboard', compact('merchants'));
    }
}
