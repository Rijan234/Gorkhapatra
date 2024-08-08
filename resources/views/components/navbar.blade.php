<style>
  .menu:hover {
    background-color: #d6d6d6;
  }

  .active-menu {
    border-bottom: 3px solid #000;
    /* Adjust the color and thickness as needed */
  }
</style>

<nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-b border-t border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-center mx-auto h-full">
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-0 mt-0 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-0 md:flex-row md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

        <!-- Display the first element -->
        <!-- @if($menus)
          <li class="menu py-0 active-menu">
            <a href="/" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-2 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
              {{ $menus[0]->title }}
            </a>
          </li>
        @endif -->

        <!-- Display the rest of the elements -->
        <!-- @foreach($menus->slice(1) as $menu)
          <li class="menu py-0 active-menu">
            <a href="{{ route('fe.category', $menu->title) }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-2 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
              {{ $menu->title }}
            </a>
          </li>
        @endforeach -->


        <!-- next method -->
        @foreach($menus as $index => $menu)
              @if ($index == 0)
              <li class="menu py-0 {{ Request::is('/') ? 'active-menu' : '' }}">
        <a href="{{ $index == 0 ? '/' : route('fe.category', $menu->title) }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-2 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
            {{ $menu->title }}
        </a>
    </li>
          @else

          <li class="menu py-0 {{ Request::is('news/' . $menu->title) ? 'active-menu' : '' }}">
            <a href="{{ route('fe.category', $menu->title) }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-2 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
              {{ $menu->title }}
            </a>
          </li>
          @endif
        @endforeach

       





      </ul>
    </div>
  </div>
</nav>