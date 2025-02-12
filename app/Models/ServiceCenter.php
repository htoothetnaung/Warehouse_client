<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCenter extends Model
{
    use HasFactory;

    protected $primaryKey = 'center_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'center_id',
        'service_center_name',
        'service_center_address',
        'service_center_region',
        'service_contact_number',
    ];

    public function complaints()
    {
        return $this->hasMany(Complaint::class, 'service_center_id', 'center_id');
    }
}
