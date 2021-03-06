<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class User extends Authenticatable
{
    use Notifiable;
    use Sortable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $sortable = ['name', 'admitted', 'admin', 'notify', 'created_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(User $user)
    {
        return $user->admin;
    }

    // public function articles()
    // {
    //     return $this->hasMany('Articles::class');
    // }

    public function routeNotificationforTeamWebhook($notification)
    {
        return env('TEAM_WEBHOOK');
    }
    
}
