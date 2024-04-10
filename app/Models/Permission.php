<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    //add a new method to check if a user has a specific permission
    public function hasPermission($permission)
    {
        return $this->user->permissions->contains($permission);
    }
}
