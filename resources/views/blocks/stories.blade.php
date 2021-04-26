<div class="{{ $block->classes }}">
  <div class="container px-6 pb-12 mx-auto lg:px-8 lg:pb-16 xl:pb-20">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
      @foreach($posts as $item)
        <div class="flex flex-col h-auto border border-gray-300 swiper-slide">
          <div class="w-full h-48 sm:h-56 xl:h-64">
            <a href="{!! $item['url'] !!}">
              <img class="object-cover object-center w-full h-full" src="{!! $item['image'] !!}" alt="">
            </a>
          </div>
          <div class="flex flex-col justify-between flex-grow p-4 text-center md:p-6 xl:p-8">
            <div class="flex-grow">
              <a href="{!! $item['url'] !!}">
                <div class="mb-4 text-lg font-semibold xl:text-2xl">{!! $item['title'] !!}</div>
              </a>
              <div class="text-sm xl:text-base sm:text-left">{!! $item['excerpt'] !!}</div>
            </div>
            <div class="mt-6 lg:mt-8">
              <a href="{!! $item['url'] !!}" class="inline-flex items-center px-8 py-3 text-xs font-black tracking-widest uppercase border rounded text-c-blue-150 border-c-blue-150 hover:text-white hover:bg-c-blue-150 xl:text-sm">
                <span>Learn More</span>
                <svg class="w-3 h-3 ml-1.5"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
