<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryLogs extends Model
{
    protected $fillable = [
        'user_id',
        'prod_id',
        'action',
        'old_data',
        'new_data',
    ];

    public function usuario()
    {
        return $this->belongsTo(UsuariosModel::class, 'user_id');
    }

    public function products()
    {
        return $this->belongsTo(ProductsModel::class, 'prod_id');
    }
}
