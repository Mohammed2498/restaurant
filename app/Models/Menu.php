<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['name', 'description', 'image', 'price'];
    public function categories(){
        return $this->belongsToMany(Category::class,'category_menu');
    }
}
