<?php

namespace App\Models\ManagementAccess;

use App\Models\ManagementAccess\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleUser extends Model
{
    use SoftDeletes;

    public $table = 'role_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
