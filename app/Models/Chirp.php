<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'address',
        'email',
        'contactNumber',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
