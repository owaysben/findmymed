<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    use HasFactory;
    protected $fillable = ['product_id'];
    protected $with = [
        'pharmacy'
    ];
    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
