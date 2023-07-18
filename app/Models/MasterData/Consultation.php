<?php

namespace App\Models\MasterData;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use SoftDeletes;

    public $table = 'consultation';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function appointment()
    {
        return $this->hasMany(Appointment::class,'consultation_id');
    }
}
