<?php

namespace Hiradrayan\Guide\View\Components;

use Hiradrayan\Guide\Models\Guide;
use Hiradrayan\Guide\Repositories\GuideRepository;
use Illuminate\View\Component;

class GuideButton extends Component
{
    public $slug;

    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $slug = $this->slug;

        $guide = GuideRepository::findBySlug($slug);

        return view('guide::components.button', compact('slug','guide'));
    }
}