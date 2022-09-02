<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Order extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //https://pageturner.us/bookstore/santos-search-for-glaciers https://pageturner.us/bookstore/green-science-saves-christmas https://pageturner.us/bookstore/
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
