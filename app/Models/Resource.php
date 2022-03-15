<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

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
