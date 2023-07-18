<?php

namespace App\Models\ManagementAccess;

use App\Models\User;
use App\Models\MasterData\TypeUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function type_user()
    {
        return $this->belongsTo(TypeUser::class,'type_user_id','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
