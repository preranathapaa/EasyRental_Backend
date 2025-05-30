<?php

namespace App\Models;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['user_id','book_date','dropoffdate','vehicle_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
