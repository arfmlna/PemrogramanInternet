<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class post extends Model {
    protected $fillable = ['title', 'author', 'slug', 'body'];
}

?>