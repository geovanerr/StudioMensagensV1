<?php

namespace App\Models\Roles;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
        'label',
        'group'
    ];

    /*
     *
     * Relacionamentos
     *
     */
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'role_id', 'id');
    }
    public function permissions()
    {
        return $this->belongsToMany(\App\Models\Permissions\Permissions::class, 'role_permission_pivot', 'role_id', 'permission_id');
    }
}
