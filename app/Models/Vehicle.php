<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = ['plate_number', 'vehicle_type', 'vehicle_color', 'visitor_id'];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
