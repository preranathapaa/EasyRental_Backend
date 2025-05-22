<?php

namespace App\Models;

use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable=[
        'image',
        'name',
        'type',
        'brand',
        'registration_num',
        'mileage',
        'engine',
        'status',
        'description',
        'price',

    ];

    public function books()
{
    return $this->hasMany(Book::class);
}



    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset($value) ? asset('storage/'.$value) : null,
        );
    }

}