<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $teble = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = ['name'];

    public function product()
    {

        return $this->hasMany(Product::class, 'id_category');

    }
}
