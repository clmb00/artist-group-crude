<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $house_exists = Artists::where('slug',$slug)->first();
        while($house_exists){
            $slug = $original_slug . '-' . $c;
            $house_exists = Artists::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
