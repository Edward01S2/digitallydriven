<div class="{{ $block->classes }}">
  <div class="relative bg-c-blue-500">
    <div class="container z-0 flex items-center w-full h-full px-6 py-12 mx-auto lg:px-8 md:py-16 lg:py-24">
      <div class="relative z-20 w-full">
        <h1 class="mb-2 text-3xl font-bold leading-none text-center text-white uppercase sm:mb-6 font-prag sm:text-5xl lg:text-6xl">{!! $heading !!}</h1>
        <p class="text-sm text-center text-white sm:text-base lg:text-xl">{!! $content !!}</p>
        <div class="mt-4 subscribe-form sm:max-w-md sm:mx-auto lg:max-w-lg">
          @include('partials.form', ['form' => $form])
        </div>
      </div>
    </div>
  </div>
</div>
