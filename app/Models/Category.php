<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    use HasFactory;
    public function Product()
    {
        # code...
        return $this->hasMany(Product::class,'id','Category_id');
    }
}
