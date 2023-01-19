<?php

namespace Database\Seeders;

use App\Models\Artwork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_paintings_artworks = config('paintings');
        $array_artworks = $array_paintings_artworks['artworks'];

        foreach ($array_artworks as $artwork_item){
            $new_artwork = new Artwork();
            $new_artwork->artist_id = $artwork_item['artist_id'];
            $new_artwork->museum_id = $artwork_item['museum_id'];
            $new_artwork->name = $artwork_item['name'];
            $new_artwork->slug = Artwork::generateSlug($new_artwork->name);
            $new_artwork->year = $artwork_item['year'];
            $new_artwork->save();
        }
    }
}
