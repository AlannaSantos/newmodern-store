<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingState extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(ShippingDivision::class, 'shipping_division_id', 'id');
    }

    public function district()
    {
        return $this->belongsTo(ShippingDistrict::class, 'shipping_district_id', 'id');
    }
}
