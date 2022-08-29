<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio_item extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'item_id', 'image'];

}
