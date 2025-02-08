<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_date',
        'product_id',
        'warehouse_branch',
        'opening_balance',
        'received',
        'dispatched',
        'closing_balance',
        'system_users_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function systemUser()
    {
        return $this->belongsTo(SystemUser::class, 'system_users_id');
    }
}
