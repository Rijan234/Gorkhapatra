<style>
    /* CSS to initially hide the table */
    #myTable {
        display: none;
    }
</style>

<x-backend-layout>







    <section class="h-screen">
        @if(session('success'))
        <div id="success-message" class=" pt-12 alert bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-xs">
            {{ session('success') }}
        </div>
        @endif

        <div class="container absolute mx-auto flex p-2 gap-4 h-full">

            <div class="w-1/4  p-4 h-full flex flex-col gap-4">
                <div id="box1" class="bg-gray-300 flex-1 rounded flex justify-center items-center">

                    @foreach ($box1 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image">
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach

                        <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </button>

                </div>
                <div id="box2" class="bg-gray-300 flex-1 rounded flex justify-center items-center">

                    @foreach ($box2 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image">
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach

                    <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>

                </div>

            </div>
            <div class="w-2/4 bg-gray-400  p-4 h-full flex items-center justify-center">
                <div id="box3" class="">


                @foreach ($box3 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image">
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach
                    <button class="toggleButton"> <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>
            </div>

            <div class="w-1/4  p-4 h-full flex flex-col gap-2">
                <div id="box4" class="bg-gray-300 flex-1 flex justify-center items-center rounded">
                @foreach ($box4 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <!-- <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image"> -->
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach
                    <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
                <div id="box5" class="bg-gray-300 flex-1 flex justify-center items-center rounded">
                @foreach ($box5 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <!-- <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image"> -->
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach
                    <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
                <div id="box6" class="bg-gray-300 flex-1 flex justify-center items-center rounded">
                @foreach ($box6 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <!-- <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image"> -->
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach
                    <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
                <div id="box7" class="bg-gray-300 flex-1 flex justify-center items-center rounded">
                @foreach ($box7 as $layout)
                    <div class="flex flex-col items-center text-center p-4 border border-gray-300 mb-4">
                        <!-- <img src="{{ asset($layout->post->image) }}" class="w-full h-auto rounded" alt="Post Image"> -->
                        <h3 class="text-xl font-semibold mt-2">{{ $layout->post->title }}</h3>
                    </div>

                    @endforeach
                    <button class="toggleButton"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 7.757v8.486M7.757 12h8.486M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </button>
                </div>
            </div>


        </div>
        <section class="absolute opacity-85 p-8">
            <div class="relative">


                <div class="relative overflow-x-auto flex justify-center mt-10">
                    <table id="myTable" class="w-3/4 m-4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border border-gray-300 dark:border-gray-600">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 rounded-s-lg border-b border-gray-300 dark:border-gray-600">
                                    S.N
                                </th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Title
                                </th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-e-lg border-b border-gray-300 dark:border-gray-600">
                                    Action
                                    <!-- Button positioned at the top right -->
                                    <button id="hideButton" class="absolute top-4 right-4 bg-gray-200 dark:bg-gray-600 text-gray-800 dark:text-white p-2 rounded">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 1; @endphp
                            @foreach($posts as $post)
                            <tr class="bg-white dark:bg-gray-800 border-b border-gray-300 dark:border-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $sn }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4">
                                    @foreach($post->categories as $category)
                                    {{ $category->title }}
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 flex gap-4">
                                    <a href="#" class="flex items-center text-green-600 activateButton" data-post-id="{{ $post->id }}">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z" clip-rule="evenodd" />
                                        </svg>
                                        Activate
                                    </a>
                                </td>



                            </tr>
                            @php $sn++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </section>

    <section>
        <div>
            <h1>Most views</h1>
        </div>
    </section>


</x-backend-layout>

<script>
    // JavaScript to toggle the visibility of the table
    var toggleButtons = document.querySelectorAll('.toggleButton');
    toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var table = document.getElementById('myTable');
            if (table.style.display === 'none' || table.style.display === '') {
                table.style.display = 'table';
            } else {
                table.style.display = 'none';
            }
        });
    });

    // JavaScript to hide the table when "Cancel" button is clicked
    var hideButtons = document.querySelectorAll('#hideButton');
    hideButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var table = document.getElementById('myTable');
            table.style.display = 'none';
        });
    });


    let storedDivId = '';

    document.querySelectorAll('.toggleButton').forEach(button => {
        button.addEventListener('click', function() {
            storedDivId = this.parentElement.id;
            console.log('Stored div ID:', storedDivId);
        });
    });

    document.querySelectorAll('.activateButton').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const postId = this.dataset.postId;
            const url = `{{ route('layout.activate', ['id' => ':postId', 'div_id' => ':storedDivId']) }}`.replace(':postId', postId).replace(':storedDivId', storedDivId);
            console.log('Updated URL:', url);
            window.location.href = url;
        });
    });


    // Hide the success message after 5 seconds
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 3000); // 5000 milliseconds = 5 seconds
</script>