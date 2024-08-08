<x-backend-layout>

    <div class="p-2">


        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Categories</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Lists</a>
                    </div>
                </li>

            </ol>
        </nav>

    </div>

    <section>
        <div class="pb-2 me-4 flex justify-end">
            <a href="{{ route('post.create') }}">
                <button class="bg-blue-500 text-white px-4 py-2 rounded">Create New</button>
            </a>
        </div>
        @if(session('success'))
        <div id="success-message" class="alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-xs">
            {{ session('success') }}
        </div>
        @endif
        @if(session('delete'))
        <div id="delete-message" class="alert bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-xs">
            {{ session('delete') }}
        </div>
        @endif
    </section>



    <section>
        <div>


            <div class="relative overflow-x-auto flex justify-center  ">
                <table class="w-full m-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 rounded-s-lg">
                                S.N
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tags
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>

                            <th scope="col" class="px-6 py-3 rounded-e-lg">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $sn = 1; @endphp
                        @foreach($posts as $post)
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $sn }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $post->title }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $post->tags }}
                            </td>
                            <td class="px-6 py-4">
                                @foreach($post->categories as $category)
                                {{ $category->title }}
                                @endforeach
                            </td>
                            <td class="px-6 py-4 flex gap-4">
                                <a href="{{ route('post.edit', $post->id) }}" class="flex items-center text-green-600">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                                    </svg>
                                    Edit
                                </a>
                               
                                <form action="{{ route('post.destroy', $post->id) }}" class="flex items-center text-red-600" method="post">
                                    @csrf
                                    @method('delete')
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd" />
                                    </svg>
                                    <button type="submit">Delete</button>

                                </form>
                            </td>

                        </tr>
                        @php $sn++; @endphp
                        @endforeach


                    </tbody>

                </table>
            </div>

        </div>
    </section>
</x-backend-layout>

<script>
    // Hide the success message after 5 seconds
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000); // 5000 milliseconds = 5 seconds
</script>
<script>
    // Hide the success message after 5 seconds
    setTimeout(function() {
        var successMessage = document.getElementById('delete-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000); // 5000 milliseconds = 5 seconds
</script>