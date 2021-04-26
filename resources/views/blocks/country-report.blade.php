<div class="{{ $block->classes }}">
  <div class="bg-c-blue-150">
    <div class="container px-6 mx-auto lg:px-8">
      <div class="py-12 sm:py-16 lg:py-20 xl:py-24">
        <h2 class="mb-4 text-3xl font-bold leading-none text-center text-white uppercase font-prag md:text-4xl lg:text-5xl lg:mb-6 2xl:text-6xl">{!! $heading !!}</h2>
        <div class="flex flex-col max-w-xs mx-auto space-y-6 md:space-y-0 md:flex-row md:space-x-6 md:justify-center md:max-w-xl lg:max-w-2xl lg:pt-8 xl:max-w-3xl lg:space-x-12">
          @foreach($reports as $report)
            <div class="w-full text-center md:flex md:max-w-sm">
              <div class="md:w-full">
                <div class="mb-2 text-lg font-semibold text-white">{!! $report['heading'] !!}</div>
                <a class="flex items-center justify-center py-3 text-sm font-black tracking-widest text-white uppercase md:w-full bg-c-orange-100 hover:opacity-75 xl:py-4 xl:text-base" href="{!! $report['report']['url'] !!}" target="_blank">
                  <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><rect width="16" height="16" fill="none"/><g transform="translate(3.333 2)"><path d="M5,14.333h9.333V13H5ZM14.333,7H11.667V3h-4V7H5l4.667,4.667Z" transform="translate(-5 -3)" fill="#fff"/></g></svg>
                  <span>{!! $report['button text'] !!}</span>
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
