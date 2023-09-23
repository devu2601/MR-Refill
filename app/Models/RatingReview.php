<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingReview extends Model
{
    use HasFactory;
    protected $table = "tbl_emp_rating";
    protected $primaryKey = "rating_id ";
}
