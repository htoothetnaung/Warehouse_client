<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_date',
        'invoice_no',
        'partner_shops_id',
        'item_name',
        'brand',
        'category',
        'product_segment',
        'product_serial_number',
        'unit_price_mmk',
        'cash_back_mmk',
        'quantity',
        'total_mmk',
        'remarks',
    ];

    public function partnerShop()
    {
        return $this->belongsTo(PartnerShop::class, 'partner_shops_id');
    }
}
