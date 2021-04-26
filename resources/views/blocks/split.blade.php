@if($image)
  <div class="{{ $block->classes }}">
    <div class="flex split-container flex-col split-{!! $side !!} pb-8 lg:grid lg:grid-cols-3 lg:items-center 2xl:grid 2xl:grid-cols-2 2xl:gap-4 xl:pb-12">
      <div class="relative w-full h-48 sm:h-64 split-img 2xl:w-full lg:h-full">
        <img class="absolute object-cover object-center w-full h-full" src="{!! $image['url'] !!}" alt="">
      </div>
      <div class="container px-6 pt-8 mx-auto split-content lg:col-span-2 lg:pt-0 2xl:w-full 2xl:h-full lg:px-0 2xl:col-span-1">
        <div class="lg:max-w-[37.333333rem] text-container xl:max-w-[42.666667rem] 2xl:max-w-[40rem] 2xl:px-8">
          <div class="prose max-w-none lg:prose-lg 2xl:prose-xl text-c-blue-600">{!! $content !!}</div>
        </div>
      </div>
    </div>
  </div>
@else
  <div class="{{ $block->classes }}">
    <div class="container px-6 py-6 mx-auto lg:px-8 lg:max-w-4xl md:py-12 xl:max-w-5xl 2xl:pb-0 2xl:max-w-7xl">
      <div class="prose max-w-none lg:prose-lg 2xl:prose-xl text-c-blue-600">
        {!! $content !!}
      </div>
    </div>
  </div>
@endif
