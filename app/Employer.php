<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Employer extends Authenticatable
{
    use Notifiable;

    protected $guard = 'employer';
    /**
     * For connection with role_admins
     *     
     */

    public function role(){
        return $this->belongsToMany(role::class,'role_admins');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname', 'lastname' ,'email', 'password', 'mobile', 'email_token', 'verified', 'landline', 'companyname', 'designation', 'website','workmail', 'othermail', 'logo', 'business_sector',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    // Set the verified status to true and make the email token null

    public function verified()
    {
        $this->verified = 1;
        $this->email_token = null;
        $this->save();
    }
}