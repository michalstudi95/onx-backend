<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_type',
        'company_name',
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'nip',
        'employee_id'
    ];

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
    }
}
