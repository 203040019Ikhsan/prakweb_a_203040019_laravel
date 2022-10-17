<?php

namespace App\Models;

//use illuminate\contracts\auth\MustverifyEmail;
use ... 
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The atributes that are mass assignable
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The atributes that should be hidden for serialization.
     * 
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The atributes that should be cast
     * 
     * @var array<int, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
?>