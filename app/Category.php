<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;

class Category extends Model
{
    protected $guarder =[];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
