<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
    class User extends Authenticatable
    {
    use Notifiable;

        const ADMIN_TYPE = 'admin';
        const DEFAULT_TYPE = 'default';

        public function isAdmin()   
        {        
        return $this->type === self::ADMIN_TYPE;    
        }

        protected $fillable = [
        'name', 'email', 'password','type','verification_code','verified'
        ];

        protected $hidden = [
        'password', 'remember_token',
        ];

         public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
    }
