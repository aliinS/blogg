<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // add a new method to assign permissions
    public function assignPermission($permission)
    {
        $this->permissions()->sync($permission);
    }
}
