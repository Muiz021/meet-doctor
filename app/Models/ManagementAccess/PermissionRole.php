<?php

namespace App\Models\ManagementAccess;

use App\Models\ManagementAccess\Role;
use Illuminate\Database\Eloquent\Model;
use App\Models\ManagementAccess\Permission;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermissionRole extends Model
{
    use SoftDeletes;

    public $table = 'permission_role';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

       public function permission()
    {
        return $this->belongsTo(Permission::class,'permission_id','id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
