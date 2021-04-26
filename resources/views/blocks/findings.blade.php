<div class="{{ $block->classes }}">
  <div class="container px-6 mx-auto lg:px-8">
    <div class="flex flex-col justify-center mb-12 border-b divide-y divide-c-gray-600 border-c-gray-600 md:flex-row md:divide-x md:py-6 md:divide-y-0 xl:mb-16">
      @foreach($items as $item)
        <a href="#find-{!! $loop->iteration !!}" class="py-3 font-semibold text-center find-btn md:px-4 md:text-sm md:py-0 hover:text-c-orange-100 lg:px-8 xl:text-base xl:px-12 2xl:text-lg">{!! $item['heading'] !!}</a>
      @endforeach
    </div>
  </div>
  <div>
    @foreach($items as $item)
      <div id="find-{!! $loop->iteration !!}" class="relative pb-12 find-container lg:pb-16">
        @if($item['bg'])
          <div class="mb-6 md:mb-8 lg:mb-12">
            <img class="object-cover object-center w-full h-full min-h-[12rem] sm:min-h-[20rem] lg:min-h-[25rem] xl:min-h-[32rem] 2xl:min-h-[35rem]" src="{!! $item['bg']['url'] !!}" alt="">
          </div>
        @endif
        <div class="container px-6 mx-auto lg:px-8">
          <h2 class="mb-4 text-3xl font-bold leading-none uppercase font-prag md:text-4xl lg:text-5xl lg:mb-6 2xl:text-6xl">{!! $item['heading'] !!}</h2>
          <p class="font-semibold lg:mb-8 xl:text-lg">{!! $item['text'] !!}</p>
          <div>
            @if($item['charts'])
              @foreach($item['charts'] as $chart)
                <div class="py-6 border-b border-c-gray-600 chart-line sm:py-8 md:flex md:space-x-12 md:items-center md:py-12 lg:space-x-16 xl:space-x-32">
                  <div class="prose max-w-none text-c-blue-600 prose-c-blue-400 chart-text lg:prose-lg">{!! $chart['text'] !!}</div>
                  <div class="pt-6 chart-img md:pt-0 md:flex-shrink-0">
                    <img class="w-full h-auto sm:max-w-sm sm:mx-auto md:max-h-48 md:w-auto lg:max-h-56 xl:max-h-64 xl:max-w-md 2xl:max-w-xl" src="{!! $chart['chart']['url'] !!}" alt="">
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
        <div class="absolute bottom-0 right-0 hidden mb-4 mr-6 lg:mr-8 md:block lg:mb-8"> 
          <a href="#hero" class="inline-flex items-center px-6 py-3 text-sm font-black uppercase border border-c-blue-150 text-c-blue-150 return-top">
            <span>Back To Top</span>
            <svg class="w-2.5 h-2.5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    @endforeach
  </div>
</div>