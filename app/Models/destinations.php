<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    use HasFactory;
    protected $table='destinations';
    protected $fillable=['placename','category_id','address','latitude','longitude','price','description','status','topdestination'];

    public function Categories()
    {
        return $this->belongsTo(User::class, 'category_id');
    }
}
