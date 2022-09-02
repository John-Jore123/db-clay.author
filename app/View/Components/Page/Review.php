<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Review extends Component
{
    public array $reviewItem = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->reviewItem = [
            [
                'image' => url('/images/book/cover-one.jpg'),
               'icon' => 'star',
               'feedback' => "
                    A great story with unique, original artwork. This is a pleasant departure from your typical children's book.
                " 
            ],
            [
                'image' => url('/images/book/cover-two.jpg'),
                'icon' => 'star',
                'feedback' => '
                    This children book is enjoyable and informative for both parents and children alike. It is a gentle introduction to the topic of climate change and ways to be aware of our impact on Mother Nature. The artwork is playful and humorous throughout with vivid images to depict how Santa, Santo and their helpers develop creative ways of saving Christmas and the planet at the same time! "Green Science Saves Christmas" keeps the magic of Christmas alive and plants the seeds of environmentalism throughout the story for parents to then help nurture and grow in this next generation of conscientious contributors to our planet.

                    This book will make a great gift for any time of year or a wonderful addition to your collection of children books!
                '
            ],
            [
                'image' => url('/images/book/cover-three.jpg'),
                'icon' => 'star',
                'feedback' => "
                    A great story with unique, original artwork. This is a pleasant departure from your typical children's book.
                "
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page.review');
    }
}
