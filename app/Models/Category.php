<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $hidden;
    protected $table = "categories";
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
