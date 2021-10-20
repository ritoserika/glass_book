<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
}
