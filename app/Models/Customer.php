<?php

namespace App\Models;

use App\Http\Resources\CustomerResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Customer extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'accessed_at',
    ];

    protected $dates = [
        'accessed_at',
    ];

    public function toSearchableArray()
    {
        return (new CustomerResource($this))->toArray();
    }
}
