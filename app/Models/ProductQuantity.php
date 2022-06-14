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

    /**protected $with = [
        'pharmacy'
    ];**/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
