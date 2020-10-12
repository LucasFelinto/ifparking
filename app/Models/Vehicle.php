<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'type_id', 'board', 'model', 'color', 'deleted'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeVehicle($query)
    {
        return $query->where('user_id', '=', Auth::id())->where('deleted', '=', 0);
    }
}
