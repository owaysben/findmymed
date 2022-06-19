<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
        'description',
        'price',
        'forme',
        'voie',
    ];

    protected $with = [
        'quantities'
    ];
    public function quantities()
    {
        return $this->hasMany(ProductQuantity::class);
    }
    public function orderitem()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function reserve()
    {
        return $this->hasMany(Reserve::class);
    }
}
