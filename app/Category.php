<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Category extends Model
{
    protected $guarder =[];
    protected $fillable= ['name'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
