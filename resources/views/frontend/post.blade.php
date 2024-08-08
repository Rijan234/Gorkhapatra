<x-frontend-layout>

    <section>
        <div class="px-8 lg:px-64 py-6">
            @if($post)
            <div class="px-8 lg:px-32 pb-6">

                <h1 class="text-4xl font-bold top-h1">{{ $post->title }}</h1>
                <div class="flex  justify-between items-center ">
                    <span class="text-gray-800 text-opacity-60 text-xs">{{ $post->created_at->diffForHumans() }} </span>


                    <div class="flex  gap-2.5 ">

                        <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" data-dropdown-placement="bottom-start" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:underline focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">Share &nbsp;
                            <svg class="w-[21px] h-[21px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.5 3a3.5 3.5 0 0 0-3.456 4.06L8.143 9.704a3.5 3.5 0 1 0-.01 4.6l5.91 2.65a3.5 3.5 0 1 0 .863-1.805l-5.94-2.662a3.53 3.53 0 0 0 .002-.961l5.948-2.667A3.5 3.5 0 1 0 17.5 3Z" />
                            </svg>

                        </button>
                        <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 shadow w-40 dark:bg-gray-700 dark:divide-gray-600 -me-8">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                                <li class="">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/posts/15" target="_blank" class="flex px-4 py-2 hover:underline dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-[17px] h-[17px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                                        </svg>&nbsp;

                                        Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="flex px-4 py-2 hover:underline dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-[17px] h-[17px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd" />
                                        </svg>&nbsp;
                                        X (Twitter)</a>
                                </li>
                                <li>
                                    <a href="#" class="flex px-4 py-2 hover:underline dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-[17px] h-[17px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                                            <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                        </svg>&nbsp;
                                        LinkedIn</a>
                                </li>
                                <li>
                                    <a href="mailto:?subject=Check%20this%20out!&body=Here%20is%20something%20interesting:%20http://localhost:8000" class="flex px-4 py-2 hover:underline dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-[17px] h-[17px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                                        </svg>&nbsp;
                                        Email</a>
                                </li>
                                <li>
                                    <a href="#" class="flex px-4 py-2 hover:underline dark:hover:bg-gray-600 dark:hover:text-white"><svg class="w-[17px] h-[17px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z" />
                                        </svg>&nbsp;
                                        Copy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    {{ $post->author }}
                </div>

            </div>
            <img src="{{ asset($post->image) }}" alt="">
            <h5 class="text-sm text-gray-800 text-opacity-60 ">{{ $post->meta_description }}</h5>
            <p class="py-2">{!!$post->description !!}</p>
            @endif
        </div>
    </section>

    <!-- Similar news -->
    
    <!-- Recent News -->
    @if($posts->isNotEmpty())
    <section class="py-4">
        <hr class="hr">
        <div class="px-8 lg:px-32 py-4 flex">
            <h1 class="text-xl  font-semibold">Similar News
            </h1>
            <img src="{{ asset('photos/arrow.png') }}" alt="" class="image-cover mt-1 -ms-3" style="width: 50px; height:30px;">
        </div>

        <!-- start Recent news -->
        <div class="px-8 lg:px-32 py-6">
            @foreach ($posts as $post)
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
    @endif


</x-frontend-layout>