<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function zones()
    {
        return $this->hasMany('App\Models\Zone');
    }
}
