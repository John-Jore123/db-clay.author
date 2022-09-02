<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Order extends Component
{
    public array $orderItem = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->orderItem = [
            [
                'title' => "Santo's Search for Glaciers",
                'cover' => url('/images/book/cover-one.jpg'),
                'href' => 'https://pageturner.us/bookstore/santos-search-for-glaciers'
            ],
            [
                'title' => "Green Science Saves Christmas",
                'cover' => url('/images/book/cover-two.jpg'),
                'href' => 'https://pageturner.us/bookstore/green-science-saves-christmas'
            ],
            [
                'title' => "Santo and the Green Magic Trunk",
                'cover' => url('/images/book/cover-three.jpg'),
                'href' => 'https://pageturner.us/bookstore/'
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
        return view('components.page.order');
    }
}
