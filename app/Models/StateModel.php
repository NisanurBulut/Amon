<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateModel extends Model
{
    protected $table = "tstate";
    protected $fillable=["name","color_id"];
    use HasFactory;

    /**
     * Get the user associated with the StateModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ColorModel(): HasOne
    {
        return $this->hasOne(ColorModel::class);
    }
}
