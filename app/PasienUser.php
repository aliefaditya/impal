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

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function update(array $attributes = [], array $options = [])
    { 
        $this->validate(request(), [
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->ttl = $request->ttl;
        $user->alamat = $request->alamat;
        $user->telepon = $request->telepon;
        $user->password = bcrypt(request('password'));

        $user->save();

        return redirect('/pasien');
    }

    

}
