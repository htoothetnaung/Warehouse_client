<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'product_id',
        'product_name',
        'quantity',
        'issue_type',
        'customer_phone',
        'remark',
        'status',
        'complain_date'
    ];

    protected $dates = [
        'complain_date',
        'created_at',
        'updated_at'
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salesInvoice()
    {
        return $this->belongsTo(SalesInvoice::class, 'invoice_id');
    }
}
