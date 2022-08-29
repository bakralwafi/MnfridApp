<?php

namespace App\Models;
use DB;
use RealRashid\SweetAlert\Facade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio_detials extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'por_id', 'type_services'];

}
