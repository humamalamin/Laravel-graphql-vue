<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Book extends Model
{
    protected $guarder =[];
    protected $fillable = ['title','description','author','link','image','category_id','featured'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
