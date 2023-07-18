<?php

namespace App\Models\Operational;

use App\Models\Operational\Appointment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use SoftDeletes;

    public $table = 'transaction';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class,'appointment_id','id');
    }
}
