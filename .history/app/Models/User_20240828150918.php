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
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
    ];
    public function login($password, $username)
    {
        $user = User::on('mysql')->where([
            'username' => $username,
            'password' => $password
        ])->first();

        if (!$user) {
            throw  new \Exception('Thông tin tài khoản không đúng');
        }
        return $user;
    }
}
