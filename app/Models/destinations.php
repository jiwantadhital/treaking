<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class destinations extends Model
{
    use HasFactory;
    protected $table='destinations';
    protected $fillable=[
        'placename',
        'category_id',
        'address',
        'latitude',
        'longitude',
        'price',
        'description',
        'status',
        'topdestination',
        'ticket_quantity'
    ];

    public function Categories()
    {
        return $this->belongsTo(User::class, 'category_id');
    }
}
