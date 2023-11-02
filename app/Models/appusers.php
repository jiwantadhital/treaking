<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUsers extends Model
{
    use HasFactory;
    protected $table='appusers';
    protected $fillable=['name','user_id','phone','image','otp'];
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
  
}
