<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'id_representante', 'id');
    }
    public function category(){
        return $this->hasOne(Category::class, 'id');
    }

    public function subcategory(){
        return $this->hasOne(Subcategory::class, 'id');
    }
}
