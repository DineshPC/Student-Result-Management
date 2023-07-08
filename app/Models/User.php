<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
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
        'user_type',
    ];

    static function getAdmin(){
        return self::select('users.*')
                        ->where('user_type', '=', '1')
                        ->orderBy('id', 'desc')
                        ->paginate(10);
    }

    static function getTeacher(){
        return self::select('users.*')
                        ->where('user_type', '=', '2')
                        ->orderBy('id', 'desc')
                        ->paginate(10);
    }

    static function getStudent(){
        return self::select('users.*')
                        ->where('user_type', '=', '3')
                        ->orderBy('id')
                        ->paginate(10);
    }

    static function getSingle($id){
        return self::find($id);
    }

    static function checkEmailExists($email){
        $existOrNot = self::where('email', $email)->first();
        return !is_null($existOrNot); // Returns true if email exists, false otherwise
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
