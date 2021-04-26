<div class="{{ $block->classes }}">
  <div class="container px-6 pt-12 pb-6 mx-auto lg:px-8 lg:max-w-4xl md:pb-0 xl:max-w-5xl 2xl:max-w-7xl">

    <div class="relative pl-12 sm:pl-16">
      <div class="text-xl 2xl:leading-relaxed max-w-none md:text-2xl xl:text-3xl 2xl:text-4xl">
        {!! $quote !!}
      </div>
      <div class="mt-6 text-sm uppercase md:text-base xl:mt-10 2xl:text-lg">{!! $attrib !!}</div>

      <div class="absolute top-0 left-0 -mt-2 xl:-ml-2">
        @svg('images.3c-quotes', 'h-10 w-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14')
      </div>
    </div>

  </div>
</div>

