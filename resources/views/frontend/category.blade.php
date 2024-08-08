<x-frontend-layout>


<!-- Category post -->
<section class="py-4">
      
        <div class="px-8 lg:px-32 py-4 flex">
            <h1 class="text-4xl  font-bold">{{ $categories->title }}
            </h1>
            <!-- <img src="{{ asset('photos/arrow.png') }}" alt="" class="image-cover mt-1 -ms-3" style="width: 50px; height:30px;"> -->
        </div>
        <hr class="hr">

        <!-- start Recent news -->
        <div class="px-8 lg:px-32 py-6">
            @foreach ($categories->posts as $post)
            <a href="{{ route('fe.post', $post->id ) }}">
                <div class="grid grid-cols-8 gap-4 py-4 px-8 lg:px-32 top-image  ">
                    <div class="col-span-2">
                        <img src="{{ asset($post->image) }}" class="w-full object-cover  " alt="Post Image">

                    </div>
                    <div class="col-span-5 flex flex-col justify-between">
                        <div>
                            <h1 class="top" style="margin: 0; padding: 0;">{{ $post->title }}</h1>
                            <p class="top-p">{{ $post->meta_description }}</p>
                        </div>
                        <span class="text-gray-800 text-xs text-opacity-60 mt-auto">{{ $post->location }}</span>
                    </div>

                    <div class="col-span-1">
                        <span class="text-gray-800 text-xs text-opacity-60"> {{ $post->created_at->diffForHumans() }} </span>
                    </div>
                </div>
                <hr class="recents">
            </a>
            @endforeach
        </div>
    </section>


</x-frontend-layout>