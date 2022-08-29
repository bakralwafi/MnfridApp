<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'type_services', 'titel', 'descraption','type_servicesar', 'titelar', 'descraptionar', 'image', 'create_at', 'update_at'];


    public static function checkprotfolio()
    {
        $protfolios = Self::all();
     /*   if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];

            Self::create($data);
        }*/

        return $protfolios;
    }
}
