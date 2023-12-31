<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorial = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->videoTutorial = [
            [
                'videoId' => '',
                'title' => '',
                'description' => '',

            ],
            [
                'videoId' => '',
                'title' => '',
                'description' => '',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.video-tutorials');
    }
}
