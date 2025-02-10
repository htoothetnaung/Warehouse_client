<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'invoice_id',
        'product_id',
        'complain_date',
        'remark',
        'status'
    ];

    /**
     * The complaint belongs to an invoice.
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * The complaint belongs to a product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
