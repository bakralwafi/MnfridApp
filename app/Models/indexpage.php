<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indexpage extends Model
{
    use HasFactory;
    public static function checkSettingsIndexpage()
    {
        $indexpage = Self::all();
     /*   if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];

            Self::create($data);
        }*/

        return Self::first();
    }
}
