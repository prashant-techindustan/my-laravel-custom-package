<?php

namespace Prashant\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://zenquotes.io/api/random');
        $array = json_decode($response, true);
        return $array[0]['q'];
    }
}