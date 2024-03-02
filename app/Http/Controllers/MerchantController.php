<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class MerchantController extends Controller
{
    public function dashboard()
    {
        $currentMerchant=Tenant::with('users')->find(config('tenant.id'));

        return view('merchant.dashboard', compact('currentMerchant'));
    }
}
