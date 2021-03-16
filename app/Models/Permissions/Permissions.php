<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = 'permissions';

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
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Roles\Roles::class, 'role_permission_pivot', 'permission_id', 'role_id');
    }
}
