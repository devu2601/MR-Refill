<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $table = "tbl_exchange_cartridge";
    protected $primaryKey = "request_id";
    protected $fillable = [
        'longitude',
        'latitude'
    ];
}
