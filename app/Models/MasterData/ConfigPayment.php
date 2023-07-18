<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfigPayment extends Model
{
    use SoftDeletes;

    public $table = 'config_payment';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $guarded = ['id'];
}
