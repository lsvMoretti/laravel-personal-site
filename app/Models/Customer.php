<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address_line_one',
        'address_line_two',
        'city',
        'county',
        'country',
        'post_code',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}
