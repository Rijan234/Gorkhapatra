  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Summernote CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <!-- Summernote JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>


  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <x-backend-layout>

      <div class="pt-6 pb-2">


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
                          <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Create</a>
                      </div>
                  </li>

              </ol>
          </nav>

      </div>


      <section>
          <div class="pb-2 ms-4 flex justify-start">
              <a href="{{ route('post.index') }}">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded">Back</button>
              </a>
          </div>
      </section>



      <section>
          <div class="m-4">

              <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="grid gap-6 mb-6 ">
                      <div>
                          <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                          <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                      </div>
                      <div>
                          <label for="meta_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Meta Description</label>
                          <input type="text" id="meta_description" name="meta_description" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 p-4" required />
                      </div>
                      <div>
                          <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
                          <select id="category_id" class="js-example-basic-single w-full" name="category_id[]" multiple required>
                            @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                          </select>
                      </div>
                      <div>
                          <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                          <textarea id="summernote" name="description"></textarea>
                      </div>
                      <div>
                          <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Photo</label>
                          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name="image" id="image" type="file">
                          <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">A picture for the news.</div>
                      </div>
                      <div>
                          <label for="tags" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tags</label>
                          <input type="text" id="tags" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Like politics, nature, crime  (optional)"  name="tags" />
                      </div>
                      <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                              <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Author</label>
                              <input type="text" id="author" name="author" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Optional"  />
                          </div>
                          <div>
                              <label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Location</label>
                              <input type="text" id="location" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                          </div>
                      </div>

                  </div>

                  <div class="flex justify-center">

                      <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Create News</button>
                  </div>


              </form>

          </div>
      </section>
  </x-backend-layout>



  <script>
      $(document).ready(function() {
          $('#summernote').summernote({
              height: 300, // Set editor height
              minHeight: null, // Set minimum height of editor
              maxHeight: null, // Set maximum height of editor
              focus: true // Set focus to editable area after initializing summernote
          });
      });
  </script>

  <script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
  </script>