<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'items';

    protected $fillable = [
        'assign_vendor',
        'attention',
        'quotation',
        'invoice',
        'customer_contract',
        'vendor_address',
        'customer_po',
        'description',
        'qty',
        'uom',
        'unit_price',
        'discount',
        'gst_vat',
        'currency',
        'change',
        'attachment',
        'notes',
        'link_to'
    ];
}
