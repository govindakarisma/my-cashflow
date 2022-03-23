<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cashflow extends Model
{
    use SoftDeletes;

    protected $hidden;
    protected $table = "cashflows";
    protected $guarded = ["id"];

    public function resource()
    {
        return $this->belongsTo(Resource::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
