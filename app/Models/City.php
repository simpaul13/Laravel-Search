<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable =  [
        'name',
        'address',
        'city',
        'state',
        'country',
    ];

    protected $searchableFields = ['*'];
}
