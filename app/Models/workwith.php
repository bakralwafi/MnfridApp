<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workwith extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'icon'];


    public static function checkworkwith()
    {
        $workwiths = Self::all();
     /*   if (count($settings) < 1) {
            $data = [
                'id' => 1,
            ];

            Self::create($data);
        }*/

        return  $workwiths ;
    }
}
