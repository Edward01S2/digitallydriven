<div class="{{ $block->classes }}" x-data="{ tab: '1' }">
  <div class="container px-6 pb-12 mx-auto lg:px-8 lg:pb-16">
    <div class="grid grid-cols-3 gap-2 border-b border-c-gray-700 md:gap-3 recommend-nav">
      @foreach($items as $item)
        <button class="inline-flex items-center justify-center p-1 py-2 text-xs font-semibold text-white border-t border-l border-r lg:px-3 lg:py-3 lg:justify-start border-c-gray-700 bg-c-blue-500 focus:outline-none sm:text-sm sm:py-4 md:text-base xl:text-lg" :class="{ 'active': tab === '{!! $loop->iteration !!}' }" @click="tab = '{!! $loop->iteration !!}'">
          <div>
            {{-- <img class="hidden w-12 h-12 mr-3 text-white lg:block xl:h-14 xl:w-14 xl:mr-4 fill" src="{!! $item['image']['url'] !!}" alt=""> --}}
            @svg($item['image'], 'hidden w-12 h-12 mr-3 lg:block xl:h-14 xl:w-14 xl:mr-4 fill-current')
          </div>
          {!! $item['title'] !!}
        </button>
      @endforeach
    </div>

    <div class="border-b border-l border-r border-c-gray-700">
      <div class="p-4 md:p-8 xl:p-12">
        @foreach($items as $item)
          <div x-show="tab === '{!! $loop->iteration !!}'" x-cloak>
            {{-- @if($item['title'])
              <div class="mb-1 text-xs font-black tracking-widest uppercase text-c-blue-150">{!! $item['title'] !!}</div>
            @endif --}}
            @if($item['heading'])
              <h3 class="mb-6 text-2xl font-semibold leading-tight lg:mb-8 lg:text-3xl xl:mb-12">{!! $item['heading'] !!}</h3>
            @endif
            <div class="flex flex-col divide-y divide-c-gray-700 lg:flex-row lg:divide-y-0 lg:divide-x">
              <div class="pb-6 prose max-w-none lg:pb-0 lg:pr-8 xl:pr-12 xl:prose-lg">{!! $item['content 1'] !!}</div>
              <div class="pt-6 prose max-w-none lg:pt-0 lg:pl-8 xl:pl-12 xl:prose-lg">{!! $item['content 2'] !!}</div>
            </div>
          </div>
        @endforeach
        <div class="pt-8 sm:max-w-md sm:mx-auto lg:max-w-lg lg:pt-12">
          <a class="flex items-center justify-center py-3 font-extrabold tracking-widest text-center text-white uppercase bg-c-orange-100 hover:opacity-75 lg:text-lg" target="_blank" href="{!! $report['url'] !!}">
            <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
            <span>Download Report</span>
          </a>
        </div>
      </div>  
    </div>
  </div>
</div>
