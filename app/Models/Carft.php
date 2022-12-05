<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carft extends Model
{
    protected $fillable = ['User_id','category','prand','price','quantity','name','total_price'];
    public function setTotalAttribute()
    {
        $this->total_price = $this->quantity * $this->price;
    }

    public function getTotalAttribute($value)
    {
        return $value;
    }
    use HasFactory;
    public function User()
    {
        # code...
        return $this->belongsTo(User::class,'User_id','id');
    }
}
