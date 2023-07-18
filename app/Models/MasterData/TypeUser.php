<?php

namespace App\Models\MasterData;

use App\Models\ManagementAccess\DetailUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeUser extends Model
{
    use SoftDeletes;

    public $table = 'type_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function detail_user()
    {
        return $this->hasMany(DetailUser::class,'type_user_id');
    }
}
