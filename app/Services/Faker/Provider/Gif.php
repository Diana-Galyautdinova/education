<?php

namespace App\Services\Faker\Provider;

use Faker\Provider\Base;

class Gif extends Base
{
    public function gif($query = 'kitten')
    {
        $url = 'http://api.giphy.com/v1/gifs/search?' . http_build_query([
                'q' => $query,
                'api_key' => config('services.giphy.key'),
                'limit' => 1,
                'offset' => self::numberBetween(1, 5e3),
            ]);

        $gif = json_decode(file_get_contents($url), true);

        return $gif['data'][0]['images']['looping']['mp4'];
    }
}
