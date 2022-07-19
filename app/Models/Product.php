<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getImagePathAttribute(){
        $raw_image = $this->image;
        $image = str_replace('public','',$raw_image);
        return asset('storage'.$image);
    }

    public function type(){
        return $this->belongsTo(ProductType::class);
    }
}
