<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
// use App\Models\ProductGallery;
// use App\Models\TransactionDetail;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'categories_id',
        'description',
        'price',
        'quantity'
    ];

    protected $hidden = [

    ];

    public function productGallery()
    {
        // return $this->hasMany(ProductGallery::class);
    }

    public function transactionDetail()
    {
        // return $this->hasMany(TransactionDetail::class);
    }
}
