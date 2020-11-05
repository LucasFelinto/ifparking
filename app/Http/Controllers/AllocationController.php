<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class AllocationController extends Controller
{
    public function store(Request $request)
    {
        $date = new Date();
      
        $allocations = new Allocation();
        $allocations->vehicle_id = $request->session()->get('vehicle')->id;
        $allocations->created_at = date('Y-m-d H:i:s');
        $allocations->zone_id = $request->zone;
        $allocations->status = 1;
        $allocations->save();
    }
}
