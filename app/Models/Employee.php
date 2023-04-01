<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    public function clients() : HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function car() : HasOne
    {
        return $this->hasOne(Car::class);
    }


}
