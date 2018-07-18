<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\TenantScope;

class Todo extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenant_id', 'todo', 'completed'
    ];


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new TenantScope);
    }

    /**
     * A todo belongs to a tenant.
     */
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

}
