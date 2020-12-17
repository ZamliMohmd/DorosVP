<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'mobile',
        'token',
        'is_activate',
        'usertype_id',
        'social_id',
        'social_type',
        'is_complete_profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function contact(){
        return $this->hasMany(Contact::class , 'user_id' , 'id' );
    }

    public function student(){
        return $this->hasOne(Student::class , 'user_id' , 'id' );
    }

    public function teacher(){
        return $this->hasOne(Teacher::class , 'user_id' , 'id' );
    }

    public function blog(){
        return $this->hasOne(Blog::class , 'user_id' , 'id' );
    }

    public function setting(){
        return $this->hasMany(Setting::class , 'user_id' , 'id' );
    }

    public function usertype(){
        return $this->belongsTo(Usertype::class , 'usertype_id' , 'id');

    }

    public function isVerified(){
        return $this->is_verified;
    }

    public function usertypeID(){
        return $this->usertype_id;
    }

    public function isCompleteProfile(){
        return $this->is_complete_profile;
    }

    public function messages()
    {
        return $this->hasMany(Message::class , 'message_id' , 'id');
    }

}
