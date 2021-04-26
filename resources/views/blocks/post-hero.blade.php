<div class="{{ $block->classes }} pt-16">
  <div class="bg-cover bg-center min-h-[15rem] sm:min-h-[20rem] lg:min-h-[25rem] xl:min-h-[32rem] 2xl:min-h-[35rem] bg-c-blue-400" style="background-image:url({!! $bg['url'] !!})">
  </div>
  <div class="container px-6 mx-auto -mt-16 lg:px-8 md:-mt-20 lg:-mt-28">
    <div class="p-4 bg-c-blue-500 sm:p-6 lg:p-12">
      <h1 class="mb-2 text-3xl font-bold text-white uppercase sm:text-4xl font-prag md:text-5xl lg:text-6xl 2xl:text-7xl">{!! get_the_title() !!}</h1>
      <a class="inline-block mb-3 text-white hover:text-c-orange-100 lg:text-lg" href="{!! $website !!}" target="_blank">{!! $website !!}</a>
      <div class="text-xs italic text-white sm:text-sm lg:text-base">{!! $details !!}</div>
    </div>
  </div>
</div>
