<?php

namespace CodeFlix\Models;
use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements TableInterface
{
    use Notifiable;

    const ROLE_ADMIN =1;
    const ROLE_CLIENT=2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getTableHeaders(){
        return ['#','Nome','E-mail'];
    }
    public function getValueForHeader($header){
        switch ($header) {
            case '#':
                return $this->id;
                break;
            case 'Nome':
                return $this->name;
                break;
            case 'E-mail':
                return $this->email;
                break;
            
        }
    }
 
}
