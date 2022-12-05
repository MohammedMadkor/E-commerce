<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['Category_id','name','price','prand','image'];
    use HasFactory;
    public function Category()
    {
        # code...
        return $this->belongsTo(Category::class,'Category_id','id');
    }
}
