<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $table = 'pharmacies';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'longitude',
        'latitude',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function quantities()
    {
        return $this->hasMany(ProductQuantity::class);
    }
}
