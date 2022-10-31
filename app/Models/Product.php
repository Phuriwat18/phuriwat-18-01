<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $teble = 'product';
    protected $primaryKey = 'product_id';
    protected $fillable = ['name','price','description','id_category','image'];

    public function category()
    {

        return $this->belongsTo(Category::class, 'id_category', 'category_id');

    }
}
