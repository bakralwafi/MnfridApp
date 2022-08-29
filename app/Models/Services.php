<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'icon', 'name', 'descraption','namear', 'descraptionar'];


    public static function checkServices()
    {
        $services = Self::all();
     /*   if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];

            Self::create($data);
        }*/

        return  $services ;
    }
}
