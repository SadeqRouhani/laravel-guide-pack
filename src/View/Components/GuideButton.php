<?php

namespace Hiradrayan\Guide\View\Components;

use Hiradrayan\Guide\Models\Guide;
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

        $guide = Guide::where('slug',$slug)->first();

        return view('guide::components.button', compact('slug','guide'));
    }
}