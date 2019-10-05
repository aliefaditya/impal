<?php

namespace ASSES;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PasienUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'pasien';
    protected $primaryKey = 'nik';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nik', 'nama', 'username', 'email', 'ttl', 'alamat', 'telepon', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}
