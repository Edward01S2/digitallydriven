<div class="{{ $block->classes }}">
  <div class="container px-6 pb-12 mx-auto lg:px-8 lg:pb-16">
    <h3 class="text-3xl font-bold leading-none text-center uppercase font-prag sm:text-5xl lg:text-6xl">{!! $title !!}</h3>
    <div class="grid grid-cols-1 gap-6 divide-y divide-c-gray-600 md:gap-8 lg:grid-cols-3 lg:divide-y-0 lg:divide-x involved-grid lg:pt-12 lg:gap-0">
      @foreach($items as $item)
        <div class="pt-6 lg:px-8 md:pt-8 lg:pt-0 item 2xl:px-12">
          <div>
            <img class="w-auto h-12 mx-auto mb-6 xl:h-14" src="{!! $item['logo']['url'] !!}" alt="">
            <div>{!! $item['content'] !!}</div>
            <div class="mt-2">
              <a class="inline-flex items-center text-c-blue-150 hover:underline" href="{!! $item['link']['url'] !!}" target="_blank">
                <svg class="w-4 h-4 mr-1 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                  <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                </svg>
                <span>{!! $item['link']['title'] !!}</span>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
