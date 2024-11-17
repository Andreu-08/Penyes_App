<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'email',
        'password',
        'role'
    ];


    //Agregamos la columna role a la lista de columnas que se pueden llenar
    public function isAdmin(){
        return $this->role === 1;
    }
    public function isUser(){
        return $this->role === 2;
    }
}

