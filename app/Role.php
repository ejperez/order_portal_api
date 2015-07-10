<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $hidden = ['updated_at', 'created_at'];	

    public function users()
    {
        return $this->hasMany('App\User', 'role_id', 'id');
    }
}
