<?php

namespace IchBin\Meta\Http\Controllers;

use App\Http\Controllers\Controller;
use IchBin\Meta\Models\Meta;

class SitemapController extends Controller
{
    public function index(): \Illuminate\Http\Response
    {
        $links = Meta::where('indexable', true)->get();

        return response()->view('filament-meta::sitemap', [
            'links' => $links,
        ])->header('Content-Type', 'text/xml');
    }

    public function pretty(): \Illuminate\Http\Response
    {
        $links = Meta::where('indexable', true)->get();

        return response()->view('filament-meta::pretty-sitemap', [
            'links' => $links,
        ]);
    }
}
