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
        return $this->owner_id===$user->id || $user->is_admin===true;
    }
}
