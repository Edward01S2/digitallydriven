<div class="{{ $block->classes }} pt-16 pb-8">
  <div class="bg-cover bg-center min-h-[15rem] sm:min-h-[20rem] lg:min-h-[25rem] xl:min-h-[32rem] 2xl:min-h-[35rem]" style="background-image:url({!! $bg['url'] !!})">
  </div>
  <div class="container px-6 mx-auto -mt-40 lg:px-8 md:-mt-56 sm:-mt-48 lg:-mt-64 xl:-mt-72">
    <div class="relative p-6 bg-white sm:p-6 md:p-8 lg:p-12">
      <div class="relative z-20">
        <h1 class="mb-2 text-4xl font-bold uppercase sm:mb-6 sm:text-5xl font-prag md:text-5xl lg:text-6xl 2xl:text-7xl lg:mb-8">{!! get_the_title() !!}</h1>
        <div class="mb-6 prose max-w-none text-c-blue-600 lg:prose-lg lg:mb-8 xl:mb-12">
          {!! $content !!}
        </div>
        @if($stats)
        <div class="grid grid-cols-1 stat-container lg:flex">
          @foreach($stats as $item)
            <div class="p-3 stat-item sm:p-4 sm:max-w-md sm:mx-auto md:p-4 sm:w-full md:max-w-none lg:flex lg:items-center lg:px-6 xl:px-8">
              <div>
                <div class="flex items-center mb-3 space-x-2 xl:space-x-4">
                  @if($item['stat'])
                    <div class="text-4xl font-semibold sm:text-5xl">{!! $item['stat'] !!}</div>
                  @endif
                  <div class="sm:flex sm:flex-col sm:justify-between">
                    @if($item['heading'])
                      <div class="font-semibold leading-tight sm:mb-1 xl:text-lg xl:leading-tight">{!! $item['heading'] !!}</div>
                    @endif
                    @if($item['subheading'])
                      <div class="text-sm subhead 2xl:text-base">{!! $item['subheading'] !!}</div>
                    @endif
                  </div>
                </div>
                @if($item['image'])
                  <img class="w-auto h-6 mx-auto mb-3 lg:h-8 lg:mb-3" src="{!! $item['image']['url'] !!}" alt="">
                @endif
                <div class="leading-tight prose-sm prose max-w-none stat-content 2xl:text-base">{!! $item['content'] !!}</div>
              </div>
            </div>
          @endforeach
        </div>
        @endif
      </div>
      <div class="absolute top-0 right-0 z-10 mt-2 mr-2 md:mt-4 md:mr-4 lg:mt-6 lg:mr-6">
        <img class="w-24 h-24 opacity-25 sm:opacity-50 lg:opacity-100 2xl:h-28 2xl:w-28" src="{!! $country['url'] !!}" alt="">
      </div>
    </div>
  </div>
</div>
