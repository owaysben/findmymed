<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $table = 'reserve';
    protected $fillable = [
        'pharmacy_id',
        'product_id',
        'user_id',
        'quantity',
        'type'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}