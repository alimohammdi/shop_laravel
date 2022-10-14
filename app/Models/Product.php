<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function categories(){
        return  $this->belongsToMany(Category::class);
    }
    public function attributes(){
        return  $this->belongsToMany(Attribute::class);
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
    }

    public function seo(){
        return $this->hasOne(Seo::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
