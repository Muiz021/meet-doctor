<?php

namespace App\Models\MasterData;

use App\Models\Operational\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialist extends Model
{
    use SoftDeletes;

    public $table = 'specialist';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function doctor()
    {
        return $this->hasMany(Doctor::class,'specialist_id');
    }
}
