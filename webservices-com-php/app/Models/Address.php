<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'state',
        'zipcode'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
