<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandModel extends Model
{
    use HasFactory;
    protected $table = "tdemand";
    protected $fillable=["title",
                         "description",
                         "state_id",
                         "status_id",
                         "app_id",
                         "owner_id",
                         "undertaking_id"];

    public function OwnedOrIsAdminBy(User $user)
    {
        if($user->is_admin)
        return true;
        else if($this->owner_id===$user->id)
        return true;
        else
        return false;
    }
}
