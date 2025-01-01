<?php

namespace Hiradrayan\Guide\Repositories;

use Hiradrayan\Guide\Models\Guide;
use Illuminate\Support\Facades\Cache;

class GuideRepository
{
    public function findBySlug($slug)
    {
        $cacheKey = "hiradrayan_guide_{$slug}";

        return Cache::tags(['hiradrayan_guides'])->remember($cacheKey, 3600, function () use ($slug) {
            return $slug::where([
                'slug' => $slug,
                'status' => Guide::STATUS_ACTIVE
            ])->first();
        });
    }
}