<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    /**
     * A tenant may have many users.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

}
