<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Category extends Model
{
    protected $fillable = ['name'];

    public function getResults($name = null)
    {
        if (!$name)
            return $this->get();

        return $this->where('name', 'LIKE', "%{$name}%")->get();
    }

    public function products()
    {
        return $this->hasMany(Product::class); // RELACIONAMENTO DE UM PARA MUITOS
    }
}
