<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShortUrlRequest;
use App\Http\Resources\UrlShortResource;
use App\Models\UrlShort;
use Illuminate\Http\Request;
use Str;

class UrlShortenerController extends Controller
{
    public function create(CreateShortUrlRequest $request)
    {
        return new UrlShortResource(UrlShort::create([
            'url' => $request->url,
            'slug' => Str::random(8)
        ]));
    }

    public function get(Request $request,UrlShort $slug)
    {
        return new UrlShortResource($slug);
    }
}
