<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ManagementAccess\PermissionRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    use SoftDeletes;

    public $table = 'permission';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function permission_role()
    {
        return $this->hasMany(PermissionRole::class,'permission_id');
    }
}
