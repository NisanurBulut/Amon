<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    protected $table = "tcolor";
    protected $fillable=["name","description"];
    use HasFactory;
}
