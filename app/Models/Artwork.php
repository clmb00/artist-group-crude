<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');

        $original_slug = $slug;
        $c = 1;
        $exists = Artwork::where('slug', $slug)
        ->first();
        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Artwork::where('slug',$slug)
            ->first();
            $c++;
        }
        return $slug;
    }
}
