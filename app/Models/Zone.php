<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'number', 'parking_id',
    ];

    public function allocation() {
        return $this->hasMany(Allocation::class);
    }
}
