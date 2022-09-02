<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public array $sidebarItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->sidebarItems = [
            [   'label' => 'Home', 
                'href' => '#home',
                'icon' => 'home'
            ],
            [   'label' => 'About the Author',
                'href' => '#about',
                'icon' => 'person'
            ],
            [   'label' => 'About the Book',
                'href' => '#book',
                'icon' => 'book'
            ],
            [   'label' => 'Book Review',
                'href' => '#review',
                'icon' => 'rate_review'
            ],
            [   'label' => 'Book Order',
                'href' => '#order',
                'icon' => 'shopping_cart'
            ],
            [   'label' => 'Artworks',
                'href' => '#artwork',
                'icon' => 'image'
            ],
            [   'label' => 'Contact',
                'href' => '#contact',
                'icon' => 'email'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.sidebar');
    }
}
