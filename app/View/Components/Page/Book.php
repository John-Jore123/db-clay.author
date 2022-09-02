<?php

namespace App\View\Components\Page;

use Illuminate\View\Component;

class Book extends Component
{
    public array $bookItems = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->bookItems = [
            [
                'title' => "Santo's Search for
                            Glaciers",
                'cover' => url('/images/book/book-one.jpg'),
                'description' => "
                    In Santos first book, Green Science Saves Christmas, Santo temporarily helped save the North Pole from melting. He restores planet Earth's magical ice. The ice helps control much of our weather on planet Earth. The magical ice that helps give life to all Earth's beings. Santo asked children and their parents to lessen their carbon footprint on the planet. Christmas has passed and winter is almost over in Santos southern home in Antarctica. Santo is looking forward to seeing how the planet is doing. He has been hoping the planet has continued to heal. Santo has been hoping mankind is doing their part in the healing process. The health of our mountain glaciers can tell us if planet Earth is continuing on its warming trend. They are much like the canary in the coal mine that tells us if there is danger in the air that we breathe. Let's visit Santo now and see how our glaciers are doing.
                ",
                'id' => 1,
                'bookID' => 'book-one'
            ],
            [
                'title' => "Green Science
                            Saves Christmas",
                'cover' => url('/images/book/book-two.jpg'),
                'description' => "
                    The North Pole is melting and with it Santa's magic and the magic of Christmas. Christmas can be saved with the help of Santa's cousin Santo. Santo the scientist, whose green science can help save Christmas and help save the planet at the same time.
                ",
                'id' => 2,
                'bookID' => 'book-two'
            ],
            [
                'title' => "Santo and the
                            Green Magic Trunk",
                'cover' => url('/images/book/book-third.jpg'),
                'description' => "
                    Santo and the Green Magic Trunk is the third book in a series. The first two were illustrated children's books. Green Science Saves Christmas introduces Santo and his penguin Antarctican friends. Santo the scientist and his penguin friends are at their home in Antarctica when a green magic trunk arrives through the ice wales of their home. Santo and his giant flying penguin friend remember the trunk from ages ago. They remember every time it arrived something big was going to happen on and to planet Earth. This is a novel for young readers. It is informative and educational as well as adventurous and humorous. It reveals a story of the great warming that is approaching Earth. It tells how a small group of caring beings help those that would become extinct if they didn't help. The novel is just under 63,000 words.
                ",
                'id' => 3,
                'bookID' => 'book-three'
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
        return view('components.page.book');
    }
}
