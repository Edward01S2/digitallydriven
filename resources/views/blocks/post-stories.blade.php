<div class="{{ $block->classes }}">
  <div class="container px-6 pt-12 pb-12 mx-auto lg:px-8 lg:pb-16 xl:pb-20 lg:pt-16">
    <h2 class="mb-6 text-3xl font-bold leading-none text-center uppercase lg:mb-8 font-prag sm:text-5xl lg:text-6xl">See their Stories</h2>
    <div class="relative min-w-0">
      <div class="relative swiper-container story-slider-2">
        <div class="swiper-wrapper">
          @foreach($posts as $item)
            <div class="flex flex-col h-auto border border-gray-300 swiper-slide">
              <div class="w-full h-48 sm:h-56 xl:h-64">
                <img class="object-cover object-center w-full h-full" src="{!! $item['image'] !!}" alt="">
              </div>
              <div class="flex flex-col justify-between flex-grow p-4 text-center md:p-6 xl:p-8">
                <div class="flex-grow">
                  <div class="mb-4 text-lg font-semibold xl:text-2xl 2xl:text-3xl">{!! $item['title'] !!}</div>
                  {{-- <div class="mb-2 text-sm italic xl:text-base 2xl:text-lg">Perugia, Italy</div> --}}
                  <div class="text-sm xl:text-base 2xl:text-lg sm:text-left">{!! $item['excerpt'] !!}</div>
                </div>
                <div class="mt-6 lg:mt-8 xl:mt-12">
                  <a href="{!! $item['url'] !!}" class="inline-flex items-center px-8 py-3 text-xs font-black tracking-widest text-white uppercase rounded bg-c-orange-100 hover:opacity-75 xl:text-base">
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
    
      <div class="absolute top-0 bottom-0 left-0 right-0 z-20 flex items-center justify-center w-full mt-4 pointer-events-none">
        <div class="flex items-center justify-between w-full">
          <div class="-ml-5 pointer-events-auto story-swiper-prev-2 lg:-ml-6 xl:-ml-8">
            @svg('images.3c-arrow-l', 'w-10 h-10 text-c-blue-600 transition duration-200 stroke-current hover:text-c-orange-100 hover:cursor-pointer md:w-12 md:h-12 xl:w-14 xl:h-14')
          </div>
          <div class="-mr-5 pointer-events-auto story-swiper-next-2 lg:-mr-6 xl:-mr-8">
            @svg('images.3c-arrow-r', 'w-10 h-10 text-c-blue-600 transition duration-200 stroke-current hover:text-c-orange-100 hover:cursor-pointer md:w-12 md:h-12 xl:w-14 xl:h-14')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
