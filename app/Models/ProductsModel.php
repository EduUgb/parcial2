<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    protected $fillable = [
        'prod_name',
        'stock',
        'price',
        'min_stock',
    ];

    public function inventoryLogs()
    {
        return $this->hasMany(InventoryLogs::class, 'prod_id');
    }
}
