<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
    use SoftDeletes;

    protected $hidden;
    protected $table = "resources";
    protected $guarded = ["id"];

    public function cashflows()
    {
        return $this->hasMany(Cashflow::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
