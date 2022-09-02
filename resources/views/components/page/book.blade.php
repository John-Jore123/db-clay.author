<section id="book">
    <div class="container mx-auto">
        <div class="flex items-center justify-center -mx-4">
            {{-- @foreach ( $bookItems as $items )
                <x-util.book-card :description="$items['description']"
                                  :title="$items['title']"
                                  :cover="$items['cover']" 
                                  :id="$items['id']"
                                  :bookID="$items['bookID']" />
            @endforeach --}}


            <div class="w-4/5 block">
                <figure class="flex card_mini_img_left" id="">
                    <img src="{{ mix('images/book/cover-one.jpg') }}" alt="">
                    <div class="relative pl-4 flex flex-col items-center justify-center">
                        <blockquote>
                            In Santos first book, Green Science Saves Christmas, Santo temporarily helped save the North Pole from melting. He restores planet Earth's magical ice. The ice helps control much of our weather on planet Earth. The magical ice that helps give life to all Earth's beings. Santo asked children and their parents to lessen their carbon footprint on the planet. Christmas has passed and winter is almost over in Santos southern home in Antarctica. Santo is looking forward to seeing how the planet is doing. He has been hoping the planet has continued to heal. Santo has been hoping mankind is doing their part in the healing process. The health of our mountain glaciers can tell us if planet Earth is continuing on its warming trend. They are much like the canary in the coal mine that tells us if there is danger in the air that we breathe. Let's visit Santo now and see how our glaciers are doing.
                        </blockquote>
                        {{-- <figcaption>
                            <div class="flex">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                            </div>
                            <blockquote>
                                A great story with unique, original artwork. This is a pleasant departure from your typical children's book.
                            </blockquote>
                        </figcaption> --}}
                        <button id=""><i class="material-icons text-white">keyboard_backspace</i></button>
                    </div> 
                </figure>
                <button class="bg-white p-4 rounded-full flex items-center mt-4 float-right">Book Reviews &nbsp;<i class="material-icons">remove_red_eye</i></button>
            </div>
            

            {{-- <div class="w-4/5 block">
                <figure class="flex card_mini_img_left" id="">
                    <img src="{{ mix('images/book/cover-two.jpg') }}" alt="">
                    <div class="relative pl-4 flex flex-col items-center justify-center">
                        <blockquote>
                            The North Pole is melting and with it Santa's magic and the magic of Christmas. Christmas can be saved with the help of Santa's cousin Santo. Santo the scientist, whose green science can help save Christmas and help save the planet at the same time.
                        </blockquote>
                        <figcaption>
                            <div class="flex">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                            </div>
                            <blockquote>
                                This children's book is enjoyable and informative for both parents and children alike. It is a gentle introduction to the topic of climate change and ways to be aware of our impact on Mother Nature. The artwork is playful and humorous throughout with vivid images to depict how Santa, Santo and their helpers develop creative ways of saving Christmas and the planet at the same time! "Green Science Saves Christmas" keeps the magic of Christmas alive and plants the seeds of environmentalism throughout the story for parents to then help nurture and grow in this next generation of conscientious contributors to our planet.

                                This book will make a great gift for any time of year or a wonderful addition to your collection of children's books!
                            </blockquote>
                        </figcaption>
                        <button id=""><i class="material-icons text-white">keyboard_backspace</i></button>
                    </div> 
                </figure>
                <button class="bg-white p-4 rounded-full flex items-center mt-4 float-right">Book Reviews &nbsp;<i class="material-icons">remove_red_eye</i></button>
            </div> --}}

            {{-- <div class="w-4/5 block">
                <figure class="flex card_mini_img_left" id="">
                    <img src="{{ mix('images/book/cover-three.jpg') }}" alt="">
                    <div class="relative pl-4 flex flex-col items-center justify-center">
                        <blockquote>
                            Santo and the Green Magic Trunk is the third book in a series. The first two were illustrated children's books. Green Science Saves Christmas introduces Santo and his penguin Antarctican friends. Santo the scientist and his penguin friends are at their home in Antarctica when a green magic trunk arrives through the ice wales of their home. Santo and his giant flying penguin friend remember the trunk from ages ago. They remember every time it arrived something big was going to happen on and to planet Earth. This is a novel for young readers. It is informative and educational as well as adventurous and humorous. It reveals a story of the great warming that is approaching Earth. It tells how a small group of caring beings help those that would become extinct if they didn't help. The novel is just under 63,000 words.
                        </blockquote>
                        <figcaption>
                            <div class="flex">
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                                <i class="material-icons">star</i>
                            </div>
                            <blockquote>
                                A great story with unique, original artwork. This is a pleasant departure from your typical children's book. 
                            </blockquote>
                        </figcaption>
                        <button id=""><i class="material-icons text-white">keyboard_backspace</i></button>
                    </div> 
                </figure>
                <button class="bg-white p-4 rounded-full flex items-center mt-4 float-right">Book Reviews &nbsp;<i class="material-icons">remove_red_eye</i></button>
            </div> --}}

        </div>
    </div>
</section>