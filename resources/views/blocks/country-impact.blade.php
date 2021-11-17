<div class="{{ $block->classes }}">
  <div class="container px-6 py-12 mx-auto lg:px-8">
    <h2 class="mb-4 text-3xl font-bold leading-none text-center uppercase font-prag md:text-4xl lg:text-5xl lg:mb-6 2xl:text-6xl">{!! $heading !!}</h2>
    <div class="flex flex-col divide-y divide-c-gray-600 impact-container">
      @foreach($items as $item)
        <div class="grid grid-cols-1 gap-8 py-6 impact-item sm:grid-cols-5 lg:grid-cols-2 lg:py-12 xl:gap-12 2xl:py-16">
          <div class="content sm:col-span-3 lg:col-span-1">
            <div class="prose max-w-none lg:prose-lg">{!! $item['content'] !!}</div>
          </div>
          <div class="img sm:col-span-2 sm:flex sm:items-center lg:col-span-1">
            @if($item['image'])
              <img class="w-auto h-56 mx-auto lg:h-64 xl:h-72" src="{!! $item['image']['url'] !!}" alt="">
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
