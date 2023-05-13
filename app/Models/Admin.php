<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;
use Laravel\Sanctum\HasApiTokens;



class Admin extends Model implements Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;
    protected $table = 'admins';
    protected $guard = 'admin';
    


    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'username',
        'password',
    ];
        // Define the primary key field name for the model
        public function getAuthIdentifierName()
        {
            return 'id';
        }
    
        // Get the unique identifier for the user
        public function getAuthIdentifier()
        {
            return $this->getKey();
        }
    
        // Get the password for the user
        public function getAuthPassword()
        {
            return $this->password;
        }
    
        // Get the remember token for the user
        public function getRememberToken()
        {
            return $this->remember_token;
        }
    
        // Set the remember token for the user
        public function setRememberToken($value)
        {
            $this->remember_token = $value;
        }
    
        // Get the remember token name for the user
        public function getRememberTokenName()
        {
            return 'remember_token';
        }
    }

