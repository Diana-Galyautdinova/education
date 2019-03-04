<?php

namespace App\Services\Faker\Provider;

use Faker\Provider\Base;

class Video extends Base
{
    public function video($query = 'kitten')
    {
        $url = 'https://pixabay.com/api/videos/?' . http_build_query([
                'key' => config('services.pixabay.key'),
                'q' => $query,
                'per_page' => 200,
                'page' => 1,
            ]);

        $videos = json_decode(file_get_contents($url))->hits;

        return $videos[self::numberBetween(1, count($videos) - 1)]->videos->medium->url;
    }
}
