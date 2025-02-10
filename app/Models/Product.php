<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'brand',
        'category',
        'product_segment',
        'product_serial_number',
        'unit_price_mmk',
        'product_image_url',
    ];

    public function salesInvoices()
    {
        return $this->hasMany(SalesInvoice::class, 'product_id');
    }

    public function stockRecords()
    {
        return $this->hasMany(StockRecord::class, 'product_id');
    }

    public function getImageUrlAttribute()
    {
        return $this->product_image_url;
    }
}
