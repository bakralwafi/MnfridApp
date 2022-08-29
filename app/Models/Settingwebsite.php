<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settingwebsite extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'Logo', 'email', 'phone', 'Address', 'insta', 'twitt', 'linked'];


    public static function checkSettings()
    {
        $settings = Self::all();
     /*   if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];

            Self::create($data);
        }*/

        return Self::first();
    }
}
