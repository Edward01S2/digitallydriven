<div class="{{ $block->classes }}">
  <div class="flex flex-col lg:mb-12 lg:grid lg:grid-cols-2 2xl:mb-16">
    <div class="relative w-full h-48 md:h-64 lg:h-full split-img">
      <img class="absolute object-cover object-center w-full h-full" src="{!! $image['url'] !!}" alt="">
    </div>

    <div class="px-6 pt-6 pb-4 lg:pt-0 lg:px-8 lg:pb-0 split-content lg:w-lg/2 xl:w-xl/2 2xl:w-2xl/2 lg:flex">
      <div class="flex flex-col w-full stat-list">
        @foreach($items as $item)
          <div class="mb-6 text-center stat-item lg:mb-8">
            @if($item['heading'])
              <h4 class="text-lg font-semibold lg:text-xl xl:text-2xl">{!! $item['heading'] !!}</h4>
            @endif
            @if($item['stat 1'])
              <div class="text-xl font-semibold lg:text-2xl xl:text-3xl"><span>{!! $item['stat 1'] !!}</span> <span class="text-c-orange-100">|</span> <span class="text-c-blue-150">{!! $item['stat 2'] !!}</span></div>
            @endif
            @if($item['content'])
              <div class="pt-4 text-sm leading-loose content xl:text-base">{!! $item['content'] !!}</div>
            @endif
            @if($item['chart'])
              <div class="max-w-xs pt-4 mx-auto xl:max-w-sm">
                <img class="w-full h-auto" src="{!! $item['chart']['url']  !!}" alt="">
              </div>
            @endif


            <div class="w-48 pt-6 mx-auto border-b border-c-gray-600 line lg:pt-8"></div>
          </div>
          
        @endforeach
      </div>
    </div>
  </div>
</div>
