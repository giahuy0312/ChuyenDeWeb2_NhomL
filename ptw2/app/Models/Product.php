<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'description',
        'size',
        'material',
        'image'
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
    public function promotions()
    {
        return $this->belongsTo(Promotion::class);
    }
}
