<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GisController extends Controller
{
    public function catalog(): JsonResponse {
        $layer = [];

        foreach (config('gis.layers', []) as $id => $def) {
            unset($def['file']);
            $def['url'] = route('gis.geojson', ['id' => $id]);

            if (isset($def['popup']['image']['dir'])) {
                $def['popup']['image']['base_url'] = asset($def['popup']['image']['dir']);
            }

            $layer[$id] = $def;
        }

        return response()->json([
            'groups' => config('gis.groups', [],),
            'categories' => config('gis.categories', []),
            'layers' => $layer,
        ]);
    }

    public function geojson(string $id) {
        $layers = config('gis.layers', []);
        abort_unless(isset($layers[$id]), 404);

        $path = 'gis/' . ltrim($layers[$id]['file'], '/');
        $disk = Storage::disk('local');
        abort_unless($disk->exists($path), 404);

        return $disk->response($path, null, [
            'Content-Type' => 'application/geo+json',
            'Cache-Control' => 'private, max-age=600',
        ]);
    }
}
