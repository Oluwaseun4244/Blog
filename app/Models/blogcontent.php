<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcontent extends Model
{
    use HasFactory;
    protected $table = "blogcontents";
    protected $fillable = [
        "author",
        "title",
        "content"
    ];
}
