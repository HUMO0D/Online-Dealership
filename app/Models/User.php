<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{

//
    use Notifiable, HasRoles; // Add HasRoles trait here
//



    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];







    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    public function assignRole($role)
    {
        return $this->roles()->sync(Role::where('name', $role)->firstOrFail());
    }

    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }
}
