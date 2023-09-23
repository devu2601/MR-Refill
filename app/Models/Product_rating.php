<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_rating extends Model
{
    use HasFactory;
    protected $table="tbl_product_rating";
    protected $primaryKey="rating_id";
}
