<x-frontend-layout>

    <!-- Section A Top -->
    <section>
        <div class="grid lg:grid-cols-4 gap-4 px-8 lg:px-32 py-6">
            <div class=" gap-2 flex flex-col">
                <div class="top-image">
                    
                        <div>
                            @foreach ($box1 as $layout)
                            <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <img src="{{ asset($layout->post->image) }}" class="w-full object-cover  " alt="Post Image">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach

                        </div>
                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>

                    </div>
                </div>
                <hr>
                <div class="top-image">
                    <div>
                        @foreach ($box2 as $layout)
                        <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <img src="{{ asset($layout->post->image) }}" class="w-full object-cover  " alt="Post Image">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach
                    </div>

                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>
                    </div>
                </div>


            </div>
            <div class=" col-span-2">
                <div class="top-image">
                    @foreach ($box3 as $layout)
                    <a href="{{ route('fe.post', $layout->post->id ) }}">
                        <img src="{{ asset($layout->post->image) }}" class="w-full object-cover  " alt="Post Image">
                        <h1 class="top-h1" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                        <p>{{ $layout->post->meta_description }}</p>

                    </a>
                        @endforeach
                </div>
                <div class="flex time ">
                    <div>
                        <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                    </div>
                    <div>
                        <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                    </div>
                </div>
            </div>
            <div class=" flex flex-col gap-2">
                <div class="top-image">
                    <div>
                        @foreach ($box4 as $layout)
                        <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach
                        </div>
                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>
                    </div>

                </div>
                <hr>
                <div class="top-image">
                    <div>
                        @foreach ($box5 as $layout)
                        <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach
                        </div>

                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>
                    </div>

                </div>
                <hr>
                <div class="top-image">
                    <div>
                        @foreach ($box6 as $layout)
                        <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach


                        </div>
                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>
                    </div>

                </div>
                <hr>
                <div class="top-image">
                    <div>
                        @foreach ($box7 as $layout)
                        <a href="{{ route('fe.post', $layout->post->id ) }}">
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $layout->post->title }}</h1>

                            <p class="top-p">{{ $layout->post->meta_description }}</p>

                        </a>
                            @endforeach
                        </div>
                    <div class="flex time ">
                        <div>
                            <span class="text-gray-800 text-opacity-60"> {{ $layout->post->created_at->diffForHumans() }} | </span>

                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $layout->post->location }}</span>


                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- Recent News -->
    <section class="py-4">
        <hr class="hr">
        <div class="px-8 lg:px-32 py-4 flex">
            <h1 class="text-xl  font-semibold">Recent News
            </h1>
            <img src="{{ asset('photos/arrow.png') }}" alt="" class="image-cover mt-1 -ms-3" style="width: 50px; height:30px;">
        </div>

        <!-- start Recent news -->
        <div class="px-8 lg:px-32 py-6">
            @foreach ($latests as $latest)
            <a href="{{ route('fe.post', $latest->id) }}">
                <div class="grid grid-cols-8 gap-4 py-4 px-8 lg:px-32 top-image  ">
                    <div class="col-span-2">
                        <img src="{{ asset($latest->image) }}" class="w-full object-cover  " alt="Post Image">

                    </div>
                    <div class="col-span-5 flex flex-col justify-between">
                        <div>
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $latest->title }}</h1>
                            <p class="top-p">{{ $latest->meta_description }}</p>
                        </div>
                        <span class="text-gray-800 text-xs text-opacity-60 mt-auto">{{ $latest->location }}</span>
                    </div>

                    <div class="col-span-1">
                        <span class="text-gray-800 text-xs text-opacity-60"> {{ $latest->created_at->diffForHumans() }} </span>
                    </div>
                </div>
                <hr class="recents">
            </a>
            @endforeach
        </div>
    </section>

    <!-- Categories -->
    <?php
    // Slice the categories collection to get from index 1 to 3
    $categoriesSubset = $categories->slice(1, 3); // (start, length)
    ?>

    @foreach($categoriesSubset as $category)
    <section>
        <hr class="hr">
        <div class="px-8 lg:px-32 py-4 flex">
            <h1 class="text-xl font-semibold">{{ $category->title }}</h1>
        </div>

        <div class="grid grid-cols-5 gap-4 px-8 lg:px-32 py-6">
            @foreach($category->posts as $post)
            <div class="col-span-1">
                <div class="top-image">
                    <a href="{{ route('fe.post', $post->id ) }}">
                        <img src="{{ asset($post->image) }}" class="w-full object-cover" alt="Post Image">
                        <h1 class="top" style="margin: 0; padding: 0;">{{ $post->title }}</h1>
                        <p class="top-p">{{ $post->meta_description }}</p>
                    </a>
                    <div class="flex time">
                        <div>
                            <span class="text-gray-800 text-opacity-60">{{ $post->created_at->diffForHumans() }} |</span>
                        </div>
                        <div>
                            <span class="text-gray-800 text-opacity-60">&nbsp;&nbsp;{{ $post->location }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @endforeach




</x-frontend-layout>