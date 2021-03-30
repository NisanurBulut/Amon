<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    protected $table = "tapp";
    protected $fillable=["name","description","stat_id","status_id","db_name","url_address","url_icon"];
    use HasFactory;
}
