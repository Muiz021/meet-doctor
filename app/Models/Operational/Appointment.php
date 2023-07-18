<?php

namespace App\Models\Operational;

use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Consultation;
use App\Models\Operational\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use SoftDeletes;

    public $table = 'appointment';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];

    public function transaction()
    {
        return $this->hasOne(Transaction::class,'appointment_id');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class,'doctor_id','id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function consultation()
    {
        return $this->belongsTo(Consultation::class,'consultation_id','id');
    }
}
