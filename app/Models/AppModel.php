<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    use HasFactory;
    protected $table = "tapp";
    protected $fillable=["name","description","db_name","url_address","url_icon"];
}
