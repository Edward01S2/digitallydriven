<div class="{{ $block->classes }}">
  <div class="container px-6 mx-auto lg:px-8">
    <div class="relative pb-12 find-container lg:pb-16">
      <div class="container px-6 mx-auto lg:px-8">
        <h2 class="mb-4 text-3xl font-bold leading-none text-center uppercase font-prag md:text-4xl lg:text-5xl lg:mb-6 2xl:text-6xl">{!! $heading !!}</h2>
        <p class="font-semibold lg:mb-8 xl:text-lg">{!! $text !!}</p>
        <div class="country-charts">
          @if($charts)
            @foreach($charts as $chart)
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
    </div>
  </div>
</div>
