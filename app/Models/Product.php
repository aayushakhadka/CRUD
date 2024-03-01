<?php

namespace App\Models;

use App\Traits\FileStorage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, FileStorage;

    protected $fillable = ['name', 'photo', 'category_id', 'price'];

    public function getPhotoAttribute($value)
    {
        return $this->getFile('uploads/categories', $value);
    }
}
