<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerShop extends Model
{
    use HasFactory;

    protected $primaryKey = 'partner_shops_id';
    protected $fillable = [
        'partner_shops_name',
        'partner_shops_email',
        'partner_shops_password',
        'partner_shops_address',
        'partner_shops_township',
        'partner_shops_region',
        'contact_primary',
        'contact_secondary',
    ];
}
