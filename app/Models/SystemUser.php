<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    use HasFactory;

    protected $primaryKey = 'system_users_id';
    protected $fillable = [
        'name',
        'role',
        'email',
        'phone',
    ];

}
