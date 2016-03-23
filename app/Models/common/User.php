<?php

namespace App/Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_USER = 'USER';
    const STATUS_NEW = 'NEW';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'firstname','lastname', 'email', 'password','role','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function  _save($request, $id = false){
        if ($id) {
            $user = self::find($id);
        } else {
            $user = new User();
        }
        if ($request->password) {
            $user->salt = uniqid(rand(), true);
            $user->password = bcrypt($request->password . $user->salt);
        }
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role = User::ROLE_USER;
        $user->status = User::STATUS_NEW;
        return $user->save();
    }
    public static function getSaltByEmail($email){
        return self::where('email', $email)->value('salt');
    }

}
