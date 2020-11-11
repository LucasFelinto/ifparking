<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session as FacadesSession;
use Symfony\Component\HttpFoundation\Session\Session;

class Allocation extends Model
{
    use HasFactory;

    public function scopeAllocation($query)
    {
        return Zone::where('id', intval(session('zone')));
        // return $query->where('zone_id', '=', FacadesSession::get('zone'));
    }
}
