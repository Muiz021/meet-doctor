<?php

namespace App\Models;

use App\Models\ManagementAccess\DetailUser;
use App\Models\ManagementAccess\RoleUser;
use App\Models\Operational\Appointment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use SoftDeletes;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'email_verified_at'
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    ##one to many##
    public function role_user()
    {
        return $this->hasMany(RoleUser::class,'user_id');
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class,'user_id');
    }
    ##end one to many##

    ##one to one##
    public function detail_user()
    {
        return $this->hasOne(DetailUser::class,'user_id');
    }
    ##end one to one##

}
