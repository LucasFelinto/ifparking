<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Date;

class AllocationController extends Controller
{
    public function store(Request $request)
    {
        $allocations = new Allocation();
        $request->session()->put('zone', $request->zone);

        $allocations->vehicle_id = $request->session()->get('vehicle')->id;
        $allocations->created_at = date('Y-m-d H:i:s');
        $allocations->zone_id = $request->zone;
        $allocations->save();
        $request->session()->put('allocations_id', $allocations);
        $zone = Allocation::allocation()->get()[0];
        $zone->status = 1;
        $zone->save();
        $request->session()->put('zone', $zone);
        $request->session()->put('isActive', false);
        return redirect()->route('vehicles.index');
    }

    public function checkout(Request $request) {
        $allocation = $request->session()->get('allocations_id');
        $allocation->updated_at = date('Y-m-d H:i:s');
        $zone = $request->session()->get('zone');
        $zone->status = 0;
        $zone->save();
        $request->session()->put('isActive', true);
        return redirect()->route('vehicles.index');
    }
}
