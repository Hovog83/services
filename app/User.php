<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ROLE_ADMIN = 'ADMIN';
    const ROLE_USER = 'USER';
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
    public function register($firstname, $lastname, $email, $password,$role,$status){
        DB::table('users')->insert([
            ['firstname' => $firstname,'lastname' => $lastname,'email' => $email, 'password' => $password,'role' => $role, 'status' => $status],

        ]);
    }
}
