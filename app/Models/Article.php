<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    // ici on dit a laravel que la table articles est relié a ce model
    protected $fillable = ['title', 'content'];
}
