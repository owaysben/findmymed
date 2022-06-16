<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    use HasFactory;

    protected $table = 'product_quantities';

    protected $primaryKey = 'id';

    protected $fillable = ['quantity', 'product_id', 'pharmacy_id'];

    protected $with = [
        'pharmacy'
    ];
    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class, 'pharmacy_id', 'user_id')->withdefault([
            'name' => 'guest'
        ]);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'pharmacy_id');
    }
}
