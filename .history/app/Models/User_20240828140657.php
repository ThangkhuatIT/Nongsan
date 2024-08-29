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
    protected $table = 'dbo.LoginTables';
    protected $fillable = [
        'username',
        'password',
    ];
    public function login($password, $username)
    {
        $user = User::on('sqlsrv')->where([
            'LoginName' => $username,
            'Password' => md5($password)
        ])->first();

        if (!$user) {
            ;
        }

        return $user;
    }
